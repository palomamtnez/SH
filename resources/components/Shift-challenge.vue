<template>

    <div class="challenge-shift__wrapper max-w-2xl mx-auto lg:max-w-none">

        <div class="section-left-panel mb-8 md:mb-0 lg:w-2/5" v-if="!isLoading">

            <div class="py-6 gray-block">
                <div class=" px-9">
                    <div class="flex items-start">
                        <div class="h-16 w-16 mr-4 ring-img">
                            <img class="rounded-full"
                                 :src="getImagePath(currentTeam.image)" :alt="currentTeam.name"/>
                        </div>

                        <div class="big">
                            <span class="text-sm">{{currentTeam.name}}</span>
                            <span class="text-xl">Challenge points</span>
                            <span class="points">{{formatNumber(currentTeam.points)}}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-6 gray-block results">
                <div class=" px-9">
                    <div class="flex items-start mb-6">
                        <div class="h-9 w-9 mr-4 ring-img">
                            <img class="h-4 w-4 m-auto" src="/assets/trophy.svg" alt="Trophy"/>
                        </div>

                        <div class="big">
                            <span class="text-sm">Overall</span>
                            <span class="text-xl">Rankings</span>
                        </div>
                    </div>
                </div>
                <ol class="mb-8">
                    <li class="flex" v-for="teamItem in teamList"
                        :class="{'active': teamItem.name === currentTeam.name}">
                        <img class="w-7 h-7 mr-4 rounded-full"
                             :src="getImagePath(teamItem.image)"
                             :alt="teamItem.name"
                             v-if="teamItem.image"
                        />
                        <div class="w-7 h-7 mr-4 rounded-full text-white text-center bg-gradient-to-r from-offBlack to-davysGrey" v-else>
                            <small class=" align-middle inset-1/2 ">{{getInitials(teamItem.name)}}</small>
                        </div>
                        <span class="ol-number">{{teamItem.name}}</span><span>{{formatNumber(teamItem.points)}}pts</span>
                    </li>
                </ol>
            </div>

            <div class="p-6 gray-block about-challenge">
                <div class="mb-6">
                    <h4 class="h4 mb-2">About</h4>
                    <p>Closes on <strong>{{closingdate}}</strong></p>
                </div>

                <p>'SHIFT' was designed to show you a seemlingly small change, like adding more steps into your day with your team, can have a huge impact on you and those with whom you participated.</p>
            </div>

        </div>

        <div class="section-enter-steps lg:w-3/5" v-if="!isLoading">

            <div class="ml-0 md:ml-8 py-6 bg-white shadow-lg sm:rounded-lg">

                <div class="px-6 mb-5">
                    <h1 class="tag">shift challenge</h1>
                </div>

                <img class="hero-img object-cover w-full lg:h-28" src="/assets/activity-header.jpg" alt="Activity Header"/>

                <div class="px-6 my-5">
                    <span class="today" v-html="today"></span>
                    <h3 class="h3">Track your steps</h3>
                    <p class="mb-6 text-offBlack">Using your movement-tracking device, keep track of the number of steps you take each day.</p>
                    <div class="enter-steps">
                        <p class="mb-2 text-offBlack"><strong>Enter your step count for this day.</strong></p>
                        <span class="help-text mb-2">Enter your answer</span>

                        <form @submit="submitForm" method="post" novalidate>
                            <label for="steps" class="flex steps__wrapper">
                                <input type="number" name="steps" max="50000" min="1" v-model="steps" required>
                                <span>steps</span>
                            </label>
                            <div v-if="error || success" class="small mb-2">
                                <p class="text-sm font-proxBold" :class="success? 'text-success' :'text-error'" v-html="success.length ? success : error"></p>
                            </div>

                            <button class="button primary" type="submit">Save answer</button>
                        </form>

                    </div>

                </div>

            </div>

        </div>

        <div class="mx-auto" v-else>
            <loading></loading>
        </div>

    </div>
</template>

<script lang="ts">
import axios from 'axios'

export default {

    props: [
        'closingdate',
        'team' // current team
    ],

    data() {
        return {
            teamList: {},
            steps: null,
            error: "",
            success: "",
            currentTeam: null,
            isLoading: true
        }
    },

    computed: {

        today: function () {
            let options = {weekday: 'long', month: 'short', day: 'numeric'};

            return new Date().toLocaleDateString("en-US", options) //"Saturday, Dec. 05";
        }

    },

    methods: {
        getImagePath: function (imgSrc) {
            return "/assets/" + imgSrc
        },

        getInitials: function (name) {
            return name.match(/\b(\w)/g).join('')
        },

        formatNumber: function (points) {
            return new Intl.NumberFormat('en-US').format(points)
        },

        submitForm: function (event) {
            event.preventDefault()

            if (isNaN(this.steps) || !(this.steps > 0)) {
                this.error = "Please make sure to submit a valid number of steps."
                this.success = ""
            } else {
                let self = this

                axios.post('/challenges/shift-challenge/save-steps',
                    Object.assign({}, {steps: this.steps * 1})) // make sure it's numeric
                    .then((response) => {
                        self.success = response.data
                        self.error = ""
                    }).catch(function () {
                        self.success = ""
                        self.error = "There was an error submitting your request."
                    })
            }
        }
    },

    async mounted() {
        let self = this; // assign context to self variable
        this.teamList = await fetch('../leaderboard.json')
            .then(function (response) {
                return response.json();
            });

        this.currentTeam = this.teamList.find((team) => team.name === self.team)

        this.isLoading = false;
    },


}
</script>


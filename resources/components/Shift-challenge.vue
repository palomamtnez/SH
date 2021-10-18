<template>

    <div class="challenge-shift__wrapper max-w-2xl mx-auto lg:max-w-none">

        <div class="section-left-panel mb-8 md:mb-0 md:w-2/5">

            <div class="py-6 gray-block">
                <div class="team-list px-9">
                    <div class="flex items-start">
                        <div class="relative h-16 w-16 mr-4">
                            <img class="rounded-full border border-gray-100 shadow-sm  border-4 border-white" src="/assets/house-stark.jpg" alt="House Stark" />
                        </div>

                        <div class="big">
                            <span class="text-sm">House stark</span>
                            <span class="text-xl">Challenge points</span>
                            <span class="points">28,999</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-6 gray-block results">
                <div class="team-list px-9">
                    <div class="flex items-start mb-6">
                        <div class="relative h-8 w-8 mr-4">
                            <img class="h-full rounded-full border border-gray-100 shadow-sm  border-4 border-white" src="/assets/trophy.svg" alt="Trophy" />
                        </div>
                        <div class="big">
                            <span class="text-sm">Overall</span>
                            <span class="text-xl">Rankings</span>
                        </div>
                    </div>
                </div>
                <ol class="mb-8">
                    <li class="flex">
                        <img class="w-7 h-7 mr-4 rounded-full" src="/assets/join-me.jpg" alt="Trophy" />
                        <span class="ol-number">Join me!</span><span>3000</span>
                    </li>
                    <li class="flex">
                        <img class="w-7 h-7 mr-4 rounded-full" src="/assets/team-awesome.png" alt="Trophy" />
                        <span class="ol-number">Team awesome</span><span>4000</span>
                    </li>
                    <li class="flex active">
                        <img class="w-7 h-7 mr-4 rounded-full" src="/assets/house-stark.jpg" alt="Trophy" />
                        <span class="ol-number">House stark</span><span class="number">6000</span>
                    </li>
                </ol>
            </div>

            <div class="p-6 gray-block about-challenge">
                <div class="mb-6">
                    <h4 class="h4 mb-2">About</h4>
                    <p>Closes on <strong>Wednesday, 23 Dec. 2021, 5:00 AM</strong></p>
                </div>

                <p>'SHIFT' was designed to show you a seemlingly small change, like adding more steps into your day with your team, can have a huge impact on you and those with whom you participated.</p>
            </div>

        </div>

        <div class="section-enter-steps md:w-3/5">

            <div class="ml-0 md:ml-8 py-6 bg-white shadow-lg sm:rounded-lg">

                <div class="px-6 mb-5">
                    <h1 class="tag">shift challenge</h1>
                </div>

                <img class="hero-img object-cover w-full lg:h-28" src="/assets/activity-header.jpg" alt="Activity Header" />

                <div class="px-6 my-5" >
                    <span class="today">Saturday, Dec. 05</span>
                    <h3 class="h3">Track your steps</h3>
                    <p class="mb-6">Using your movement-tracking device, keep track of the number of steps you take each day.</p>
                    <div class="enter-steps">
                        <p class="mb-2"><strong>Enter your step count for this day.</strong></p>
                        <span class="help-text mb-2">Enter your answer</span>

                        <label for="steps" class="flex steps__wrapper">
                            <input type="number" name="steps" max="50000" min="1">
                            <span>steps</span>
                        </label>

                        <button class="button primary">Save answer</button>
                    </div>

                </div>

            </div>

        </div>

    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Example component mounted.')
    }
}
</script>

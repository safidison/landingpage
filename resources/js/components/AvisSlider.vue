<template>
    <div
        class="font-sans bg-white rounded-[30px] shadow-md lg:mx-auto flex items-center justify-center relative w-[50%] lg:w-[85%] p-4 mt-4 mb-16 sm:h-[401px] sm:min-w-[301px]"
    >
        <div class="avis-slider-wrapper overflow-hidden lg:w-4/5">
            <div
                class="avis-slider flex transition-transform duration-300 ease-in-out items-center justify-center"
            >
                <div 
                    class="avis-card flex-1 px-4 text-center bg-white p-4 rounded-lg mx-2 lg:max-w-[240px] h-[220px] sm:hidden"
                >
                    <div class="text-3xl font-bold">Excellent</div>
                    <p class="mt-2 text-yellow-500 text-4xl">
                        {{ "★".repeat(5) }}
                    </p>
                    <div>
                        Based on <span class="font-bold underline">414 reviews</span>
                    </div>
                    <div class="flex w-full items-center justify-center mt-4">
                        <img src="../../images/google_logo.svg" class="w-[120px] h-full"/>
                    </div>
                </div>
                <button
                    @click="moveSlider(-1)"
                >
                    <i class="fa fa-chevron-left text-[#cccccc] text-3xl sm:mr-4" aria-hidden="true"></i>
                </button>
                <div
                    v-for="(review, index) in currentReviews"
                    :key="index"
                    class="avis-card flex-1 px-4 text-center bg-[#f4f4f4] p-4 rounded-lg shadow-md lg:mx-2 lg:max-w-[240px] h-[240px] sm:h-[299px] sm:border-lg sm:my-8"
                >
                    <div class="flex flex-row text-left">
                        <div
                            v-if="review.photo"
                            class="w-8 h-8 rounded-full overflow-hidden text-left"
                        >
                            <img
                                :src="review.photo"
                                :alt="review.name"
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div
                            v-else
                            class="w-8 h-8 rounded-full flex items-center justify-center bg-gray-300 text-white text-left"
                        >
                            <span class="text-xl font-semibold">{{
                                review.name.charAt(0)
                            }}</span>
                        </div>

                        <div class="flex flex-col ml-4">
                            <h3 class="text-lg font-bold">
                                {{ review.name }}
                            </h3>
                            <div class="text-xs text-[#919191]">
                                4 Décembre 2023
                            </div>
                        </div>
                    </div>
                    <div class="text-left">
                        <p class="mt-2 text-yellow-500">
                            {{ "★".repeat(review.rating) }}
                        </p>
                        <p class="text-lg mt-2">
                            {{ review.text }}
                        </p>
                    </div>
                </div>
                <button
                    @click="moveSlider(1)"
                >
                    <i class="fa fa-chevron-right text-[#cccccc] text-3xl sm:ml-4" aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            reviews: [
                {
                    name: "Jean Dupont",
                    photo: null,
                    rating: 4,
                    text: "Excellent service, très satisfait du résultat. Je recommande fortement !",
                },
                {
                    name: "Marie Curie",
                    photo: null,
                    rating: 5,
                    text: "Parfait ! Tout s'est bien passé et très rapide.",
                },
                {
                    name: "Pierre Durand",
                    photo: null,
                    rating: 4,
                    text: "Très bon accueil et service rapide.",
                },
                {
                    name: "Sophie Lemoine",
                    photo: null,
                    rating: 3,
                    text: "Un service satisfaisant, mais peut être amélioré.",
                },
                {
                    name: "Alice Martin",
                    photo: null,
                    rating: 5,
                    text: "Excellente expérience, je reviendrai sans hésiter.",
                },
                {
                    name: "Marc Lefevre",
                    photo: null,
                    rating: 4,
                    text: "Bon service, mais quelques améliorations possibles.",
                },
            ],
            currentIndex: 0,
            visibleItems: this.calculateVisibleItems(),
        };
    },
    computed: {
        currentReviews() {
            return this.reviews.slice(
                this.currentIndex,
                this.currentIndex + this.visibleItems
            );
        },
        sliderStyle() {
            return {
                transform: `translateX(-${this.currentIndex * 33.333}%)`,
            };
        },
    },
    methods: {
        moveSlider(direction) {
            this.currentIndex += direction;

            if (this.currentIndex < 0) {
                this.currentIndex = this.reviews.length - this.visibleItems;
            }
            if (this.currentIndex >= this.reviews.length) {
                this.currentIndex = 0;
            }
        },
        calculateVisibleItems() {
            return window.innerWidth > 1023 ? 3 : 1;
        },
        updateVisibleItems() {
            this.visibleItems = this.calculateVisibleItems();
            if (this.currentIndex + this.visibleItems > this.reviews.length) {
                this.currentIndex = Math.max(0, this.reviews.length - this.visibleItems);
            }
        },
    },
    mounted() {
        window.addEventListener("resize", this.updateVisibleItems);
    },
    beforeDestroy() {
        window.removeEventListener("resize", this.updateVisibleItems);
    },
};
</script>

<style scoped>

.avis-slider {
    display: flex;
    transition: transform 0.3s ease-in-out;
}
</style>

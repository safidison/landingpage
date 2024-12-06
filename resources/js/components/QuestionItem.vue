<template>
    <div
        v-for="(item, index) in items"
        :key="index"
        class="border-b border-[#585858] last:border-none py-8 sm:py-4"
    >
        <div
            class="flex justify-between items-center cursor-pointer"
            @click="toggleAccordion(index)"
        >
            <p
                class="font-latto text-[40px] sm:text-[18px] font-normal text-[#585858] tracking-normal"
            >
                {{ item.title }}
            </p>
            <span class="font-sans text-[#585858] text-[50px] sm:text-[25px] sm:text-[14px]">+</span>
        </div>
        <div
            v-if="isOpen(index)"
            class="font-sans mt-4 sm:mt-2 text-[#585858] text-[30px] sm:text-[14px] leading-6"
        >
            {{ item.content }}
        </div>
    </div>
</template>

<script>
export default {
    name: 'QuestionItem',
    props: {
        items: {
            type: Array,
            required: true,
        },
    },
    data() {
        return {
            openIndex: null,
        };
    },
    mounted(){
        console.log('okokoko')
    },
    methods: {
        toggleAccordion(index) {
            this.openIndex = this.openIndex === index ? null : index;
        },
        isOpen(index) {
            return this.openIndex === index;
        },
    },
};
</script>

<style scoped>
.cursor-pointer {
    cursor: pointer;
}
</style>

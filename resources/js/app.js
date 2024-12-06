import { createApp } from 'vue';
import AvisSlider from './components/AvisSlider.vue';
import QuestionItem from './components/QuestionItem.vue';

const app = createApp({});
app.component('avis-slider', AvisSlider);
app.component('question-item', QuestionItem);
app.mount('#vue-section');

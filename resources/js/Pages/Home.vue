<template>
    <Head title="Главная" />
    <div class="h-screen w-full bg-red-100 relative">

        <nav class="absolute z-10 bg-red-800 bg-opacity-50 w-full text-white text-xl">
            <div class="max-w-7xl mx-auto">
                <div class="flex justify-between">
                    <div>
                        <div class="flex space-x-4 py-4">
                            <Link :href="route('home')" class="hover:text-gray-400">
                                Главная
                            </Link>

                            <Link :href="route('home')" class="hover:text-gray-400">
                                Ветераны Великой Отечественной войны
                            </Link>

                            <Link :href="route('home')" class="hover:text-gray-400">
                                Воины-интернационалисты
                            </Link>
                        </div>
                    </div>
                    <div>
                        <div class="flex space-x-8 py-4">
                            <Link :href="route('login')" class="hover:text-gray-400">
                                Войти
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="relative bg-indigo-50 h-full overflow-hidden">
            <img class="object-cover" src="https://sovetandreevka.ru/wp-content/uploads/2019/05/DSC_0112.jpg">
            Изображение страницы
            <div class="z-10 absolute bottom-0 left-0 text-white">
                <div>Книга памяти</div>
                <div>Внутригородского муниципального образования города Севастополя - Андреевский муниципальный округ</div>
            </div>
        </div>
    </div>

</template>


<script>
import { defineComponent } from 'vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
    components: {
        Head,
        Link,
    },

    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    }
})
</script>

<template>
    <Layout>
        <Head title="Книга памяти" />



        <div class="flex flex-col space-y-8">

            <div class="max-w-screen-lg mx-auto">
                <div class="flex space-x-8">
                    <div class="">
                        <div class="w-80 aspect-w-3 aspect-h-4">
                            <img class="w-full object-cover rounded" :src="soldier.photo || 'https://pamyat-naroda.ru/local/templates/pn/image/avatar.svg'">
                        </div>
                    </div>
                    <div class="flex flex-col space-y-3 my-auto h-full w-full">
                        <div class="font-merriweather text-5xl italic">
                            <div>{{ soldier.last_name }}</div>
                            <div>{{ soldier.first_name }}</div>
                            <div>{{ soldier.patronymic }}</div>
                        </div>
                        <div>
                            <div v-if="soldier.year_of_birth !== null">
                                Дата рождения: {{ soldier.birthday || '__' }}.{{ soldier.month_of_birth || '__' }}.{{ soldier.year_of_birth || '____' }}
                            </div>

                            <div v-if="soldier.year_of_death !== null">
                                Дата смерти: {{ soldier.death_date || '__' }}.{{ soldier.death_month || '__' }}.{{ soldier.year_of_death || '____' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div v-if="soldier.biography.length">
                <h1 class="font-merriweather text-3xl italic pb-2">Биография</h1>
                <div class="text-xl">
                    {{ soldier.biography }}
                </div>
            </div>

        </div>
    </Layout>
</template>

<script>
import Layout from "@/Shared/Layout"
import { Head } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Head,
        Layout,
    },
    props: {
        soldier: Object
    },
}
</script>

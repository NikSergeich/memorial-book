<template>
    <Layout>
        <Head title="Книга памяти" />

        <div class="flex flex-col space-y-6">
            <div v-for="soldier in soldiers" class="group flex space-x-6 hover:text-blue-700 hover:rounded-md">
                <div class="w-44">
                    <div class="aspect-w-3 aspect-h-4">
                        <img class="w-full object-cover rounded-md group-hover:scale-105 delay-50 duration-200 ease-in-out" :src="soldier.photo || 'https://pamyat-naroda.ru/local/templates/pn/image/avatar.svg'">
                    </div>
                </div>

                <div class="flex flex-col w-full h-full space-y-2 my-auto">
                    <Link :href="route('soldiers.show', soldier.id)">
                        <div class="text-xl font-merriweather text-3xl italic">
                            {{ soldier.last_name }}
                            {{ soldier.first_name }}
                            {{ soldier.patronymic }}
                        </div>
                    </Link>

                    <div>
                        <div v-if="soldier.year_of_birth && soldier.year_of_birth.length > 0">
                            Дата рождения: {{ soldier.birthday || '__' }}.{{ soldier.month_of_birth || '__' }}.{{ soldier.year_of_birth || '____' }}
                        </div>

                        <div v-if="soldier.year_of_death && soldier.year_of_death.length > 0">
                            Дата смерти: {{ soldier.death_date || '__' }}.{{ soldier.death_month || '__' }}.{{ soldier.year_of_death || '____' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </Layout>
</template>

<script>
import Layout from "@/Shared/Layout"
import { Head, Link } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Head,
        Link,
        Layout,
    },
    props: {
        soldiers: Object
    },
}
</script>

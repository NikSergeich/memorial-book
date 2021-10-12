<template>
    <Layout>
        <Head title="Книга памяти" />

        <div class="">
            <form @submit.prevent="store">
                <div>
                    <div>
                        <div>
                            Фамилия
                        </div>
                        <div>
                            <input type="text" v-model="soldierForm.last_name">
                        </div>
                    </div>

                    <div>
                        <div>
                            Имя
                        </div>
                        <div>
                            <input type="text" v-model="soldierForm.first_name">
                        </div>
                    </div>

                    <div>
                        <div>
                            Отчество
                        </div>
                        <div>
                            <input type="text" v-model="soldierForm.patronymic">
                        </div>
                    </div>

                    <div>
                        <div>
                            Фото
                        </div>
                        <div>
                            <input type="file" @input="soldierForm.photo = $event.target.files[0]">
                        </div>
                    </div>

                    <div>
                        <div>
                            Дата рождения
                        </div>
                        <div>
                            <input type="text" v-model="soldierForm.birthday">

                            <input type="text" v-model="soldierForm.month_of_birth">

                            <input type="text" v-model="soldierForm.year_of_birth">
                        </div>
                    </div>

                    <div>
                        <div>
                            Дата смерти
                        </div>
                        <div>
                            <input type="text" v-model="soldierForm.death_date">

                            <input type="text" v-model="soldierForm.death_month">

                            <input type="text" v-model="soldierForm.year_of_death">
                        </div>
                    </div>

                    <div>
                        <div>
                            Биография
                        </div>
                        <div>
                            <textarea class="w-full" rows="8" v-model="soldierForm.biography"></textarea>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="bg-indigo-500 text-white rounded-lg px-4 py-2" :disabled="soldierForm.processing">Добавить</button>
                    </div>
                </div>
            </form>
        </div>

    </Layout>
</template>

<script>
import Layout from "@/Shared/Layout"
import { Head, Link, useForm } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Head,
        Link,
        useForm,
        Layout,
    },
    setup () {
        const soldierForm = useForm({
            last_name: null,
            first_name: null,
            patronymic: null,
            photo: null,
            birthday: null,
            month_of_birth: null,
            year_of_birth: null,
            death_date: null,
            death_month: null,
            year_of_death: null,
            biography: null,
        })
        return { soldierForm }
    },
    methods: {
        store () {
            this.soldierForm.post(this.route('soldiers.store'))
        }
    }
}
</script>

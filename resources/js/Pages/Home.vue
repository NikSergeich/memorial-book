<template>
    <Layout>
        <Head title="Книга памяти" />

        <div class="">
            Text
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

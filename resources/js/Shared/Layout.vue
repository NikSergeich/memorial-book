<template>
    <main class="">
        <header>
            <div class="bg-red-700 text-white shadow-lg">
                <div class="max-w-screen-xl mx-auto h-14 flex items-center text-lg">
                    <div class="flex space-x-4">
                        <Link href="/">Home</Link>
                        <Link href="/soldiers">Soldiers</Link>
                    </div>
                </div>
            </div>


        </header>

        <div class="max-w-screen-lg mx-auto px-4 py-6 rounded-lg">
            <slot />
        </div>

        <footer class="">
            <div class="bg-gray-800 text-white">
                <div class="max-w-screen-xl mx-auto h-14 flex items-center text-lg">
                    <div>
                        &copy; Dev project
                    </div>
                </div>
            </div>
        </footer>
    </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Link,
    }
}
</script>

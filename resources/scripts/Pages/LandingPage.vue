<template>
    <Head title="Play Microscope Online" />

    <div class="flex flex-col" style="flex: 1 0 auto;">
        <div class="pb-8">
            <header class="page-header relative">
                <div class="flex items-center justify-between max-w-7xl mx-auto px-4">
                    <Link href="/">
                        <img src="/images/logo_inverted_text.svg" class="h-10"/>
                    </Link>

                    <nav class="px-4 py-4 flex justify-end items-center">
                        <Link :href="route('login')" class="text-indigo-100 px-4">Login</Link>
                        <Link :href="route('register')" class="px-4 py-2 rounded-sm text-indigo-700 bg-white hover:bg-indigo-100">Register</Link>
                    </nav>
                </div>

                <div class="max-w-7xl mx-auto px-4 pt-4 md:pt-12 pb-4">
                    <div class="md:w-2/3 lg:w-1/2">
                        <h1 class="text-3xl md:text-5xl font-bold tracking-wider text-white">Play Microscope online</h1>
                        <p class="text-indigo-200 mb-10">
                            Holocron is a website that enables you to play Microscope with your friends all over the world.
                            Completely for free. Holocron is a fork of <a href="https://github.com/ksassnowski/utgars-chronicles.app">Utgar's Chronicles</a>
                        </p>

                        <Link
                            :href="route('register')"
                            class="bg-gray-100 text-gray-800 font-bold text-lg px-6 py-3 rounded shadow-lg hover:bg-indigo-600 hover:text-white"
                        >Sign Up for Free</Link>
                    </div>
                </div>
            </header>

            <main class="mt-32">
                <section class="max-w-7xl mx-auto px-4">
                    <h2 class="text-4xl font-bold text-gray-800 tracking-tight text-center mb-12">
                        Frequently Asked Questions
                    </h2>

                    <ul class="lg:px-48">
                        <li class="mb-8">
                            <p class="font-bold text-lg text-gray-800 mb-1">Is this an official product?</p>
                            <p class="text-gray-700">
                                No, Mortarwork Studios are hosting a forked version of <strong>Utgar's Chronicles</strong>, a fan-made service to help you play Microscope online. It has no affiliation with Lame Mage Productions or Ben Robbins. We intend to implement
                                features that help us play Microscope online.
                            </p>
                        </li>

                        <li class="mb-8">
                            <p class="font-bold text-lg text-gray-800 mb-1">Are the rules of the game included?</p>
                            <p class="text-gray-700">
                                No, it is assumed that you or someone you play with knows or owns the rules.
                                You can purchase them over at <a href="http://www.lamemage.com/microscope/" target="_blank" rel="noopener noreferrer" class="text-indigo-700 font-semibold">Lame Mage Productions</a>.
                                Trust me, it's worth it.
                            </p>
                        </li>

                        <li class="mb-8">
                            <p class="font-bold text-lg text-gray-800 mb-1">Does it cost anything?</p>
                            <p class="text-gray-700">
                                No, you can have as many histories as you want and play in as many games as you want.
                            </p>
                        </li>

                        <li class="mb-8">
                            <p class="font-bold text-lg text-gray-800 mb-1">Can I support the development and
                                maintenance of the Holocron fork?</p>
                            <p class="text-gray-700 mb-4">
                                At this time we are not taking monetary contributions, but we do monitor the issues in our <a href="https://github.com/mortarworkstudios/holocron/">Github</a>.
                            </p>
                        </li>

                        <li class="mb-8">
                            <p class="font-bold text-lg text-gray-800 mb-1">Can I support the development and maintenance of Utgar's Chronicles?</p>
                            <p class="text-gray-700 mb-4">
                                You can support the creator of Utgar's Chronicles on their Patreon.
                            </p>
                            <p class="flex justify-center mb-4">
                                <a href="https://www.patreon.com/bePatron?u=4095316" data-patreon-widget-type="become-patron-button">Become a Patron!</a>
                            </p>

                            <p class="mb-4 text-gray-700">Or you can also <a href="https://www.buymeacoffee.com/utgar" target="_blank" rel="noreferrer noopener" class="text-indigo-700 font-semibold">buy me a coffee</a>.</p>

                            <p class="text-gray-700 mb-4">
                                You can also <a href="https://github.com/sponsors/ksassnowski" target="_blank" rel="noreferrer noopener" class="text-indigo-700 font-semibold">sponsor me on GitHub</a>.
                            </p>
                        </li>
                    </ul>
                </section>
            </main>
        </div>
    </div>

    <PageFooter />
</template>

<script lang="ts" setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import {onMounted} from "vue";

import PageFooter from "@/components/UI/PageFooter.vue";

onMounted(() => {
    const patreonScript = document.createElement("script");
    patreonScript.setAttribute("src", "https://c6.patreon.com/becomePatronButton.bundle.js");
    document.body.append(patreonScript);
});
</script>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import axios from 'axios';
const form = useForm({
    name: 'client-credential-1',
    redirect: 'http://example.com/callback',
});

const submit = () => {
    const data = {
        name: 'client-credential-1',
        redirect: 'http://example.com/callback'
    };

    axios.post('/oauth/clients', data)
        .then(response => {
            console.log(response.data);
        })
        .catch (response => {
            // List errors on response...
        });
};

const getToken = () => {
    const data = {
        grant_type: 'authorization_code',
        client_id: '1',
        client_secret: 'JbMpwXCokMIWznqwMfNFBXlKDFp5GWgxT0U6xFsJ',
        redirect_uri: 'http://example.com/callback',
        code: 'def5020046b0493434b33cfaafcda2e521cb092ac3bc34af6b6107bf1bc8100a4a26ea68ae0ed46b42477f7e8079dd2ca38035a7968de37c21320f2d0c905c9a64e5e2a7f39d7fe3a05c4a8cb459d235ad3cb7e5c1d1caea2cd1ab7954ab76986c6faf4139498c3842455a41cb60f27002c38d7e8d75fb7a9dca5ba1c67a0cab9da014e0212a6c269dc1f23762e05527f43816a3c998e450a861eb650d70f91aa030119f0b9125193c3ff80d9a70bf0958faea6f7be37d6a0954d518bdb25a911694a835ace55e75c7d347fff204d06296c6d5db2cf395f8d99a07cced3fce0de8eb4346b6b1f52d7890206268340d644ee4aa2bc6ac6cc9c3016ea50c49b25778b22850c1e7dccabcfdf57dd569a385b651fec6a77b2a84b6b29f04125c519b1782de01940beca4702503bd1cdfc3a52b530248f78bc53adac5316711adb68570c76f12a10f97f89081d69b1ed2c75fc02c6e29373785cbb0ef06'
    };

    axios.post('/oauth/token', data)
        .then(response => {
            console.log(response.data);
        })
        .catch (response => {
            // List errors on response...
        });
};


</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                    <div>
                        <button class="bg-red" @click="submit">create client</button>

                    </div>
                    <button @click="getToken">get Token</button>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>

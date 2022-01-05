<template>
    <app-layout>
        <template #breadcrumb>
            <t-breadcrumb :breadcrumbStyle="1" :breadcrumbs="breadcrumbs"/>
        </template>
        <!--Header-->
        <template #header>
            User Management
        </template>
        <!--Subheader-->
        <template #subHeader>
            List of users in the system
        </template>
        <!--Content-->
        <template #default>

            <t-table :color="tableColor" :content="users" :header="header" :pagination="true"
                     :searchable="['name','email']">
                <template #search>
                    <grid-section :col="12" :gap="2">
                        <!--Name-->
                        <t-input-group class="col-span-12 md:col-span-6" label="Name">
                            <t-input-text id="name"/>
                        </t-input-group>
                        <!--Email-->
                        <t-input-group class="col-span-12 md:col-span-6" label="Email">
                            <t-input-text id="email"/>
                        </t-input-group>
                    </grid-section>
                </template>
                <template #right>
                    <t-button :link="route('users.create')" :radius="8" color="solid-gray">
                        <t-user-circle-icon class="w-6 h-6"/>
                        Add New User
                    </t-button>
                </template>
                <template #photo="{props}">
                    <t-avatar :link="props.photo" :radius="8" :size="3"/>
                </template>
                <template #roles="{props}">
                    <template v-for="(role) in props.roles">
                        <t-badge class="mr-1" :radius="8">
                            {{ role.name }}
                        </t-badge>
                    </template>
                </template>
                <template #actions="{props}">

                    <t-button color="solid-gray" size="sm" class="mr-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </svg>
                    </t-button>

                    <t-button color="solid-gray" size="sm" class="mr-1">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </svg>
                    </t-button>

                    <t-button color="solid-red" size="sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </svg>
                    </t-button>


                </template>

            </t-table>

        </template>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import TTable from "@/Components/Table/TTable";
import TAvatar from "@/Components/Avatar/TAvatar";
import TInputGroup from "@/Components/Form/TInputGroup";
import TInputText from "@/Components/Form/Inputs/TInputText";
import GridSection from "@/Layouts/GridSection";
import TButton from "@/Components/Button/TButton";
import TUserCircleIcon from "@/Components/Icon/TUserCircleIcon";
import TComponentColorSelector from "@/Components/Misc/TComponentColorSelector";
import TBreadcrumb from "@/Components/Breadcrumb/TBreadcrumb";
import TBadge from "@/Components/Badge/TBadge";
import TCheckCircleIcon from "@/Components/Icon/TCheckCircleIcon";

export default {
    name: "Table",
    components: {
        TBreadcrumb,
        TBadge,
        TComponentColorSelector,
        TCheckCircleIcon,
        TUserCircleIcon,
        TButton,
        GridSection,
        TInputText,
        TInputGroup,
        AppLayout,
        TTable,
        TAvatar
    },
    props: ['users'],
    data() {
        return {
            tableColor: 'solid-gray',
            header: [
                {label: 'Avatar', key: 'photo', align: 'center', width: '5'},
                {label: 'Name', key: 'name', align: 'left'},
                {label: 'Email', key: 'email', align: 'left'},
                {label: 'Roles', key: 'roles', align: 'left'},
                {label: 'Actions', key: 'actions', align: 'left'}
            ],
            breadcrumbs: [
                {label: 'Home', link: '/', active: false},
                {label: 'Dashboard', link: '', active: true, activeColor: 'blue'}
            ]
        }
    }
}
</script>

<style scoped>

</style>

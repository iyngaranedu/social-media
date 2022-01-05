<template>
    <app-layout :actionButtons="true">
        <template #breadcrumb>
            <t-breadcrumb :breadcrumbStyle="1" :breadcrumbs="breadcrumbs"/>
        </template>
        <!--Header-->
        <template #header>
            Competitors Management
        </template>
        <!--Subheader-->
        <template #subHeader>
            Create New Competitors
        </template>
        <template #action-buttons>
            <TButton :radius="3" color="solid-gray" :link="route('dashboard')">
                <font-awesome-icon icon="angle-left"/>
                Back to Dashboard
            </TButton>
        </template>
        <template #default>
            <t-form-content :reset-button="true" :submit-button="true" @reset="reset" @submitted="save" class="w-32">

                <t-form-section
                    description="Competitors's Facebook page information"
                    title="Competitor Information">

                    <t-input-group
                        class="col-span-12 md:col-span-6"
                        label="Title"
                        labelFor="title"
                        sub-label="*"
                        sub-label-color="solid-red"
                    >
                        <t-input-text id="title" v-model="form.title" placeholder="Company Name"/>
                    </t-input-group>

                    <!-- Name -->
                    <t-input-group
                        class="col-span-12 md:col-span-6"
                        label="FaceBook Page Url"
                        labelFor="name"
                        sub-label="*"
                        sub-label-color="solid-red"
                    >
                        <t-input-text id="name" v-model="form.name" placeholder="https://www.facebook.com/SASSportNZ/"/>
                    </t-input-group>


                </t-form-section>

            </t-form-content>
        </template>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import TButton from "@/Components/Button/TButton";
import TFormSection from "@/Components/Form/TFormSection";
import TFormContent from "@/Components/Form/TFormContent";
import TInputGroup from "@/Components/Form/TInputGroup";
import TInputText from "@/Components/Form/Inputs/TInputText";
import TInputTextArea from "@/Components/Form/Inputs/TInputTextArea";
import TInputSelect from "@/Components/Form/Inputs/TInputSelect";
import TBadge from "@/Components/Badge/TBadge";
import TBreadcrumb from "@/Components/Breadcrumb/TBreadcrumb";

export default {
    name: "UserCreate",
    components: {
        TBreadcrumb,
        TBadge,
        TInputSelect,
        AppLayout,
        TButton,
        TFormSection,
        TFormContent,
        TInputGroup,
        TInputText,
        TInputTextArea
    },
    data() {
        return {
            loading: false,
            form: this.$inertia.form({
                _method: 'POST',
                name: null,
                tax_id: null,
                email: null,
                phone: null,
                status: null,
                address: null,
            }),
            breadcrumbs: [
                {label: 'Home', link: '/', active: false},
                {label: 'Dashboard', link: '', active: true, activeColor: 'blue'}
            ],
            status: [
                {name: 'Passive', value: 0, icon: 'XIcon', class: 'w-5 h-5 text-red-500 mr-2'},
                {name: 'Active', value: 1, icon: 'Checked', class: 'w-5 h-5 text-green-500 mr-2'}
            ],
        };
    },
    methods: {
        reset: function () {
            this.form.name = null;
            this.form.tax_id = null;
            this.form.email = null;
            this.form.phone = null;
            this.form.status = null;
            this.form.address = null;
        },
        save() {
            this.form.post(route('competitors.store'), {
                errorBag: 'competitors',
                preserveScroll: true,
            });
            this.loading = true;
        }
    }
}
</script>

<style scoped>

</style>




























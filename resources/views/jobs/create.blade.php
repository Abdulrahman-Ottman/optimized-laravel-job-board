<x-layout>
    <x-page-heading>Create Job Post</x-page-heading>

    <x-forms.form method="POST" action="/jobs" >
        <x-forms.input label="Job Title" name="title" placeholder="BackEnd Developer"/>
        <x-forms.input label="Salary" name="salary" placeholder="$100,000 USD"/>
        <x-forms.input label="Location" name="location" placeholder="Remote"/>

        <x-forms.select label="Schedule" name="schedule">
            <option class="bg-black">Full Time</option>
            <option class="bg-black">Part Time</option>
        </x-forms.select>

        <x-forms.input label="Website Url" name="url"/>
        <x-forms.checkbox label="Feature (extra cost)" name="featured" />

        <x-forms.divider />
        <x-forms.input label="Tags (comma seperated)" name="tags" placeholder="backend, software, development"/>



        <x-forms.button>Post</x-forms.button>
    </x-forms.form>
</x-layout>

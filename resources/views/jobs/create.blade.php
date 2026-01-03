<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Software Developer" />
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida" />
        
        <x-forms.select label="Schedule" name="type">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="http://example.com/jobs/x" />
        <x-forms.checkbox label="Feature (Coasts Extra)" name="featured" />
        
        <x-forms.divider/>

        <x-forms.input label="Tags (Comma seperated)" name="tags" placeholder="Frontend, API, Git" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms>
</x-layout>
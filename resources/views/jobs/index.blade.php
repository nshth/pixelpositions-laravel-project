<x-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-4xl">
                Let's FInd You A Great Job
            </h1>
            <form action="" class="mt-10 font-semibold">
                <input 
                type="text" 
                placeholder="I'm looking for..." 
                class="bg-white/5 border border-white/10 px-5 py-4 rounded-xl w-full max-w-2xl text-white placeholder-white/25 outline-none focus:ring-1 focus:ring-white/20">
            </form>
        </section>
        <section class="pt-8">
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-8">  
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach($tags as $tag)
                    <x-tag :$tag/> <!-- :job="$job" -->
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
            </div>
        </section>
    </div>
</x-layout>
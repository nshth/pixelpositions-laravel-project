@props(['job'])

<div class="p-4 bg-white/7 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-800 group transition-colors duration-700">
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8">
        <h3 class="group-hover:text-blue-700 text-xl transition-colors duration-500">{{$job->title}}</h3>
        <p class="mt-6 font-medium">"{{$job->salary}}-{{$job->type}}"</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :tag="$tag" size='small'/>
            @endforeach 
        </div>
        <x-employer-logo :width="42"/>
    </div>
</div>
@props(['job'])

<div class="p-4 bg-white/7 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-800 group transition-colors duration-700">
    <div>
        <x-employer-logo :employer="$job->employer"/>
    </div>
    <div class="flex-1">
        <a href="" class="self-start text-sm text-gray-600">{{$job->employer->name}}</a>
        <h3 class="font-bold text-lg group-hover:text-blue-700 transition-colors duration-500">
            <a href="{{$job->url}}">
                {{$job->title}}
            </a> 
        </h3>
        <p class="text-sm text-gray-400">{{$job->salary}} - {{$job->type}}</p>
    </div>
    
    <div class="flex flex-col justify-between items-center ">

        <div class="mt-auto ">            
            @foreach($job->tags as $tag)
                <x-tag :tag="$tag" size='small'/>
            @endforeach  
        </div>
    </div>
</div>
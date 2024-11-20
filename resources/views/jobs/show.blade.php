<x-layout>
    <x-slot:hedding>
        Job : {{ $job['title'] }}
    </x-slot:hedding>
       <h2 class="text-lg font-bold"> {{ $job->title}} </h2>
       <p>
            this job pays {{ $job['salary'] }} per year.
       </p>

       @can('edit', $job)
          <div class="mt-6">
               <x-button href='/jobs/{{$job->id}}/edit'>Edit Job</x-button>
          </div> 
       @endcan
       
</x-layout>
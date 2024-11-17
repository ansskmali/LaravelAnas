<x-layout>
    <x-slot:hedding>
        Jobs Listings
    </x-slot:hedding>
    
    <div class="space-y-4">

        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-400 rounded-lg hover:border-red-600">
                
                <div class="font-bold text-blue-500 text-sm">
                    {{$job->employer->EmpName}}
                </div>
                
                <div>
                    <strong>{{$job['title']}}</strong>: Has {{$job['salary']}} per year.
                </div>
            </a>
        @endforeach

        <div>
            {{$jobs->links()}};
        </div>
        
    </div>
</x-layout>
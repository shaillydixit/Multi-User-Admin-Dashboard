<x-app-layout>
    <x-slot name="header">
        Hi...{{Auth::user()->name}}
    </x-slot>

    <div class="py-12">
       <h1>Its Shailly Here!!!!</h1> 
    </div>
</x-app-layout>

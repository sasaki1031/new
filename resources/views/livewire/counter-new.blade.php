<div class="flex p-8 items-center flex-col bg-white rounded-lg shadow-lg max-w-sm mx-auto">

    <h1 class="text-4xl font-semibold text-gray-800 mb-6">{{$number}}</h1>

    <div class="flex space-x-4">
        <button 
            wire:click="decrement" 
            type="button" 
            class="text-gray-800 border border-red-600 hover:bg-gray-200 hover:text-gray-800 rounded-lg text-lg px-5 py-3 transition duration-200"
        >
            Decrement
        </button>
        <button 
            wire:click="increment" 
            type="button" 
            class="text-gray-800 border border-green-600 hover:bg-gray-200 hover:text-gray-800 rounded-lg text-lg px-5 py-3 transition duration-200"
        >
            Increment
        </button>
    </div>
</div>

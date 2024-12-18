<div class="flex p-10 items-center flex-col bg-gray-50 rounded-lg shadow-lg">

    <h1 class="text-4xl font-semibold text-gray-800 mb-6">{{$number}}</h1>

    <div class="flex space-x-4">
        <button 
            wire:click="decrement" 
            type="button" 
            class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-lg px-6 py-3 transition duration-200 transform hover:scale-105"
        >
            Decrement
        </button>
        <button 
            wire:click="increment" 
            type="button" 
            class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-lg px-6 py-3 transition duration-200 transform hover:scale-105"
        >
            Increment
        </button>
    </div>
</div>

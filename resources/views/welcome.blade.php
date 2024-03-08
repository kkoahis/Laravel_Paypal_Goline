<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Intern Goline</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="mx-auto max-w-7xl p-10 text-center">
        <div>
            <div class="mb-10">
                <h3 class="text-3xl font-bold">Payment Intern Goline</h3>
                <p class="text-gray-500">Hotel Booking</p>  
            </div>

            <form action="{{ route('paypal') }}" method="post">
                @csrf
                <input type="text" name="name" id="name" class="border-2 border-black p-2 rounded" placeholder="Enter name" required>
                <input type="text" name="price" id="price" class="border-2 border-black p-2 rounded" placeholder="Enter price" required>
                <input type="text" name="quantity" id="quantity" class="border-2 border-black p-2 rounded" placeholder="Enter quantity" required>

                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Pay with paypal
                </button>
            </form>
        </div>
    </div>
</body>

</html>

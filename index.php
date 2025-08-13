<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cashfree V4 API</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Cashfree SDK -->
  <script src="https://sdk.cashfree.com/js/v3/cashfree.js"></script>
</head>

<body class="bg-indigo-700 min-h-screen text-white">
  <!-- Header -->
  <header class="sticky top-0 z-50 w-full bg-indigo-800 shadow-md">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-4 py-3">
      <a href="#" class="flex items-center space-x-2">
        <img src="https://cashfreelogo.cashfree.com/cashfreepayments/logopng4x/Cashfree_Payments_Logo-3.png" class="h-6" alt="Cashfree Logo">
        <span class="font-semibold text-lg">Cashfree V4 API Demo</span>
      </a>
      <a href="https://cashfree.com/devstudio" target="_blank" class="bg-yellow-300 text-black font-medium px-4 py-2 rounded-full hover:bg-yellow-400">Contact Us</a>
    </div>
  </header>

  <!-- Main Content -->
  <main class="max-w-6xl mx-auto px-4 py-12 grid md:grid-cols-2 gap-10 items-center">
    <!-- Image -->
    <div class="">
      <img src="https://pagedone.io/asset/uploads/1700471600.png" alt="API Illustration" class="w-full h-auto rounded-lg shadow-lg" />
    </div>

    <!-- Form -->
    <div class="bg-white text-gray-800 p-8 rounded-lg shadow-xl">
      <h2 class="text-2xl font-bold mb-6 text-center">Place Your Order</h2>
      <form method="post" action="http://localhost:8000/php_workspace/PHPV3API/v3api/pay.php" class="space-y-5">
        <div>
          <label for="amount" class="block mb-1 font-medium">Amount</label>
          <input type="number" name="orderamount" id="amount" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        <div>
          <label for="ordernote" class="block mb-1 font-medium">Order Note</label>
          <input type="text" name="ordernote" id="ordernote" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        <div>
          <label for="customername" class="block mb-1 font-medium">Customer Name</label>
          <input type="text" name="customername" id="customername" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        <div>
          <label for="customeremail" class="block mb-1 font-medium">Customer Email</label>
          <input type="email" name="customeremail" id="customeremail" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        <div>
          <label for="customerphone" class="block mb-1 font-medium">Customer Phone</label>
          <input type="text" pattern="[789][0-9]{9}" name="cuatomerphone" id="customerphone" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition">Place Order</button>
      </form>
    </div>
  </main>
</body>

</html>

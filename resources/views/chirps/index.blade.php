<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
</html>
<div class="max-w-2xl mx-auto p-4">
<h1 class="text-2xl font-bold">Chirps</h1>
<form  class = "space-y-4" action=" " method="post">
    @csrf
    <textarea  class="border border-gray-300 rounded-md p-2 w-full" name="content" rows="3" placeholder="What's happening" id=""></textarea>
    <button type="submit" class="bg-blue-500 text-white  rounded-md  px-4 py-2 ">Submit</button>
</form>
</div>
    
</body>
</html>
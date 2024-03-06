<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random NASA Image</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-6xl font-bold text-center mb-8">TITLE</h1>
        <h2 class="text-4xl font-bold text-center mb-8">Random NASA Image</h2>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <?php
            $apiKey = 'YOUR_NASA_API_KEY';
            $apiUrl = 'https://api.nasa.gov/planetary/apod?api_key=' . $apiKey . '&count=1';

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $apiUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            $data = json_decode($response, true);

            if ($data && isset($data[0]['url'])) {
                $imageUrl = $data[0]['url'];
                $imageTitle = $data[0]['title'];
                $imageExplanation = $data[0]['explanation'];

                echo '<img src="' . $imageUrl . '" alt="' . $imageTitle . '" class="mx-auto mb-4 rounded-lg shadow-md">';
                echo '<h3 class="text-xl font-bold mb-2">' . $imageTitle . '</h3>';
                echo '<p class="text-gray-700">' . $imageExplanation . '</p>';
            } else {
                echo '<p class="text-red-500">Failed to fetch NASA image. Please try again later.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>

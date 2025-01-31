<?php
    echo "hello there";
  // Get the new query from the POST request
    // Set the file path and name
    $file_path = "queries.json";

    echo "Kedar";

    echo $_GET['name'];
    echo $_GET['email'];
    echo $_GET['subject'];
    echo $_GET['query'];


    // Get the contents of the JSON file
    $file_contents = file_get_contents($file_path);

    // Decode the JSON contents into a PHP array
    $data = json_decode($file_contents, true);

    // Get the query data from the HTTP POST request
    $query_data = array(
        "name" => $_GET["name"],
        "email" => $_GET["email"],
        "subject" => $_GET["subject"],
        "query" => $_GET["query"],
        "timestamp" => time()
    );

    // Add the new query data to the top of the array
    array_unshift($data, $query_data);

    // Encode the updated data back into JSON
    $new_file_contents = json_encode($data);

    // Save the updated JSON data back into the file
    file_put_contents($file_path, $new_file_contents);
?>
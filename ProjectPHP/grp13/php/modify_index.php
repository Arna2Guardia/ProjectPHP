<?php
require_once "config.php";

// Check if the form has been submitted
if(isset($_POST['button'])){
    // Move the uploaded files to the designated folder
    if($_FILES['image_1']['name'] != NULL){
      move_uploaded_file($_FILES['image_1']['tmp_name'], "../img/".$_FILES['image_1']['name']);
      $image_1 = "../img/".$_FILES['image_1']['name'];
    }
    if($_FILES['image_2']['name'] != NULL){
      move_uploaded_file($_FILES['image_2']['tmp_name'], "../img/".$_FILES['image_2']['name']);
      $image_2 = "../img/".$_FILES['image_2']['name'];
    }
    if($_FILES['image_3']['name'] != NULL){
      move_uploaded_file($_FILES['image_3']['tmp_name'], "../img/".$_FILES['image_3']['name']);
      $image_3 = "../img/".$_FILES['image_3']['name'];
    }
    // Get the file paths
    // $image_1 = "../img/".$_FILES['image_1']['name'];
    // $image_2 = "../img/".$_FILES['image_2']['name'];
    // $image_3 = "../img/".$_FILES['image_3']['name'];

    // Prepare the update query
    $sql = "UPDATE index_content SET title = :title, image_1 = :image_1, image_2 = :image_2, image_3 = :image_3, subtitle_1 = :subtitle_1, subtitle_2 = :subtitle_2, subtitle_3 = :subtitle_3, text_1 = :text_1, text_2 = :text_2 WHERE id_index_content = :id_index_content";
    $pre = $pdo->prepare($sql);

    // Bind the parameters to the query
    $pre->bindParam(':title', $_POST['title']);
    $pre->bindParam(':image_1', $image_1);
    $pre->bindParam(':image_2', $image_2);
    $pre->bindParam(':image_3', $image_3);
    $pre->bindParam(':subtitle_1', $_POST['subtitle_1']);
    $pre->bindParam(':subtitle_2', $_POST['subtitle_2']);
    $pre->bindParam(':subtitle_3', $_POST['subtitle_3']);
    $pre->bindParam(':text_1', $_POST['text_1']);
    $pre->bindParam(':text_2', $_POST['text_2']);
    $pre->bindParam(':id_index_content', $_POST['id_index_content']);

    // Execute the query
    $pre->execute();

    // Handle the query result
    if($pre->rowCount() > 0){
        // Update was successful
        header('Location:../html/admin_index.php');
    } else {
        // Update was not successful
        echo "Error updating the index content. Please try again.";
    }
}
?>

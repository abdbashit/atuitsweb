<?php include 'partials/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Bio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa; /* Sea Blue */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .bio-container {
            background-color: #1b3a5f; /* Dark Blue */
            color: #ffffff;
            width: 70%;
            padding: 20px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            margin-top: 50px; /* Pushes the bio-container down */
        }
        .bio-header {
            text-align: center;
            position: relative; /* Position relative for adjustment */
            margin-bottom: 30px; /* Adjust margin for spacing */
        }
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            position: absolute;
            top: -75px; /* Adjust this value as needed to align properly */
            left: 11%;
            transform: translateX(-50%);
            border: 3px solid #e0f7fa; /* Sea Blue */
        }
        .bio-header h1 {
            margin: 90px 0 10px; /* Adjusted to account for profile picture position */
            font-size: 2.5em;
            color: #e0f7fa; /* Sea Blue */
        }
        .bio-header p {
            font-size: 1.2em;
            color: #bdc3c7; /* Light Gray */
        }
        .bio-content {
            line-height: 1.8;
            color: #ffffff;
        }
        .bio-content h2 {
            font-size: 1.8em;
            margin-bottom: 15px;
            color: #e0f7fa; /* Sea Blue */
            border-bottom: 2px solid #ffffff;
            padding-bottom: 5px;
        }
        .bio-content p {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="bio-container">
    <div class="bio-header">
        <img src="./images/Dr. Ernest Ganaa.PNG" alt="Profile Picture" class="profile-pic">
        <h1>Dr. ERNEST D GANAA</h1>
        <p>Dean of faculty ICT</p>
    </div>

    <div class="bio-content">
        <h2>Introduction</h2>
        <p>Dr. ERNEST D GANAA is an Associate Professor of Computer Science with over 15 years of experience in both academia and industry. He is passionate about teaching and research in the fields of artificial intelligence, machine learning, and data science.</p>

        <h2>Background</h2>
        <p>Dr. Doe earned his PhD in Computer Science from Stanford University, where he specialized in neural networks and deep learning. His groundbreaking research has been published in numerous top-tier journals and conferences.</p>

        <h2>Research Interests</h2>
        <p>Dr. Doe's current research focuses on the ethical implications of AI and developing algorithms that ensure fairness and transparency in automated decision-making.</p>

        <h2>Publications</h2>
        <p>Dr. Doe has authored over 50 peer-reviewed publications and has been invited to speak at several international conferences.</p>
    </div>
</div>

</body>
</html>

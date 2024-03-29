
<!-- $relativePath = 'file:///C:/xampp/htdocs/Page/ArokiyaDeniferSResume.pdf'; -->

<?php
// Get the root directory of the web server
$rootPath = $_SERVER['DOCUMENT_ROOT'];

// Specify the relative path to your resume file
$relativePath = 'file:///C:/xampp/htdocs/Page/ArokiyaDeniferSResume.pdf';

// Combine the root path with the relative path
$resumePath = $rootPath . $relativePath;

if (isset($_GET['download'])) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="Arokiya_Denifer_Resume.pdf"');
    readfile($resumePath);
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Arokiya Denifer's Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        header {
            
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }
        section {
            margin: 20px;
        }
        h2 {
            color: #333;
        }
        .experience {
            margin-bottom: 20px;
        }
        .education {
            margin-bottom: 20px;
        
        }
        .projects {
            margin-bottom: 20px;
        }
        .skills {
            margin-bottom: 20px;
        }
        .strengths {
            margin-bottom: 20px;
        }
        .languages {
            margin-bottom: 20px;
        }
        #button{
            color:red;
        }
    </style>
</head>
<body>

    <header>
        <h1>Arokiya Denifer - Software Engineer</h1>
        <p>Contact: 8610987898 | Email: denifer.selvam@gmail.com | Location: Chennai</p>
    </header>

    <section class="experience">
        <h2>Experience</h2>
        <p><strong>Software Engineer</strong></p>
        <p><em>Exela Technologies, Chennai</em></p>
        <p>Involving in interface design of web application from design to implementation.</p>
        <!-- Add more experience details as needed -->
    </section>

    <section class="education">
        <h2>Education</h2>
        <p><strong>MCA</strong></p>
        <p><em>Justice Basheer Ahmed Syed College for women</em></p>
        <!-- Add more education details as needed -->
    </section>

    <section class="projects">
        <h2>Projects</h2>
        <p><strong>Online Fruit Shop</strong></p>
        <p>I created an online fruit shop from start to finish...</p>
        <!-- Add more project details as needed -->
    </section>

    <section class="skills">
        <h2>Skills</h2>
        <p><strong>Programming Languages:</strong> HTML, CSS, JavaScript, PHP, .NET</p>
        <p><strong>Web Technologies:</strong> Bootstrap, jQuery, Angular</p>
        <p><strong>Database:</strong> SQL</p>
    </section>

    <section class="strengths">
        <h2>Strengths</h2>
        <p><strong>Technical Proficiency:</strong> Skilled in HTML, CSS, JavaScript, PHP, .NET, and SQL with a proven track record of delivering high-quality software solutions.</p>
        <p><strong>Adaptability:</strong> Successfully navigated diverse projects, demonstrating flexibility and problem-solving in dynamic environments.</p>
    </section>

    <section class="languages">
        <h2>Languages</h2>
        <p><strong>Tamil:</strong> Native</p>
        <p><strong>English:</strong> Intermediate</p>
    </section>

    <section class="resume">
        <h2>Resume</h2>
        <p>Download my resume:</p>
        <button id="button" class="bg-light color-white mt-3 p-2"><a href="?download=1">Download Resume</a></button>
    </section>

</body>
</html>

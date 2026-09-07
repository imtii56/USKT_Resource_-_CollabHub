<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studyhub_courses";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get program ID from URL
$program_id = isset($_GET['program_id']) ? intval($_GET['program_id']) : 1;
$semester_id = isset($_GET['semester_id']) ? intval($_GET['semester_id']) : null;

// Get program details
$program = $conn->query("SELECT * FROM programs WHERE program_id = $program_id")->fetch_assoc();

// Get all semesters for this program
$semesters = $conn->query("SELECT * FROM semesters WHERE program_id = $program_id ORDER BY semester_number");

// Get courses for selected semester (default to first semester)
if (!$semester_id && $semesters->num_rows > 0) {
    $first_semester = $semesters->fetch_assoc();
    $semester_id = $first_semester['semester_id'];
    $semesters->data_seek(0); // Reset pointer
}

$courses = [];
if ($semester_id) {
    $courses_result = $conn->query("SELECT * FROM courses WHERE semester_id = $semester_id ORDER BY course_id");
    while ($row = $courses_result->fetch_assoc()) {
        $courses[] = $row;
    }
    
    // Get current semester info
    $current_semester = $conn->query("SELECT * FROM semesters WHERE semester_id = $semester_id")->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($program['program_name']) ?> - StudyHub</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
     
   
   <link rel="stylesheet" href="/css/courseDetilals.css">


   <style>

        :root {
            --primary: #02075D;
            --primary-light: #4a52d1;
            --secondary: #f8f9fa;
            --accent: #4ecca3;
            --text: #333333;
            --text-light: #666666;
            --card-bg: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: var(--text);
            background-color: #f9fafc;
            padding: 0;
            margin: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background-color: white;
            box-shadow: 0 2px 20px rgba(2, 7, 93, 0.08);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo_img {
            height: 40px;
        }

        nav {
            display: flex;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: var(--text);
            font-weight: 500;
            transition: all 0.3s;
            position: relative;
        }

        nav a:hover {
            color: var(--primary);
        }

        /* Program Header */
        .program-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            padding: 60px 0;
            text-align: center;
            margin-bottom: 40px;
        }

        .program-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .program-header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Semester Navigation */
        .semester-nav {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .semester-nav button {
            padding: 10px 20px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 500;
        }

        .semester-nav button:hover {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .semester-nav button.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        /* Semester Info */
        .semester-info {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .btn{
            background-color: var(--primary);
            color: white;
            padding: 17px;
            text-decoration: none;
            border-radius: 5px;
        }

        .semester-info h3 {
            color: var(--primary);
            margin-bottom: 10px;
        }

        /* Courses Table */
        .course-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 40px;
        }

        .course-table th {
            background-color: var(--primary);
            color: white;
            padding: 15px;
            text-align: left;
        }

        .course-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
        }

        .course-table tr:last-child td {
            border-bottom: none;
        }

        .course-table tr:hover {
            background-color: #f5f7ff;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .semester-nav {
                gap: 5px;
            }
            
            .semester-nav button {
                padding: 8px 12px;
                font-size: 0.9rem;
            }
            
            .course-table {
                display: block;
                overflow-x: auto;
            }
        }

   </style>
</head>
<body>
    <header>
        <div class="container nav">
            <div class="logo"><img src="Images/logo.png" alt="StudyHub Logo" class="logo_img"></div>
            <nav>
                <a href="index.html">Home</a>
                <a href="courses.html">Courses</a>
                <a href="about.html">About us</a>
                <a href="courceDetials.php">Details</a>
            </nav>
            <div><a href="#" class="btn">Let's Collaborate</a></div>
        </div>
    </header>

    <section class="program-header">
        <div class="container">
            <h1><?= htmlspecialchars($program['program_name']) ?></h1>
            <p><?= htmlspecialchars($program['description']) ?> | <?= $program['duration_years'] ?> Year Program | <?= $program['total_semesters'] ?> Semesters</p>
        </div>
    </section>

    <div class="container">
        <!-- Semester Navigation -->
        <div class="semester-nav">
            <?php while ($semester = $semesters->fetch_assoc()): ?>
                <button 
                    onclick="window.location.href='?program_id=<?= $program_id ?>&semester_id=<?= $semester['semester_id'] ?>'"
                    class="<?= $semester['semester_id'] == $semester_id ? 'active' : '' ?>"
                >
                    Semester <?= $semester['semester_number'] ?>
                </button>
            <?php endwhile; ?>
        </div>

        <!-- Current Semester Info -->
        <?php if (isset($current_semester)): ?>
        <div class="semester-info">
            <h3><?= $current_semester['semester_name'] ?> - <?= $current_semester['academic_session'] ?></h3>
            <p>Total Courses: <?= count($courses) ?> | Total Credit Hours: <?= array_sum(array_column($courses, 'credit_hours')) ?></p>
        </div>
        <?php endif; ?>

        <!-- Courses Table -->
        <table class="course-table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Delivery</th>
                    <th>Code</th>
                    <th>Course</th>
                    <th>Credits</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $course): ?>
                <tr>
                    <td><?= htmlspecialchars($course['course_category']) ?></td>
                    <td><?= htmlspecialchars($course['course_type']) ?></td>
                    <td><?= htmlspecialchars($course['delivery_type']) ?></td>
                    <td><?= htmlspecialchars($course['course_code']) ?></td>
                    <td><?= htmlspecialchars($course['course_name']) ?></td>
                    <td><?= $course['credit_hours'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <footer>
        <div class="container">
            <p>&copy; <?= date('Y') ?> StudyHub. All rights reserved. Made with ❤️ by students, for students.</p>
        </div>
    </footer>
</body>
</html>
<?php
$conn->close();
?>
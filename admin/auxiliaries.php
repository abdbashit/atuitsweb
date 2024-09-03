<?php
function getcourses()
{
  include('./database/config.php');
  $statement = $pdo->prepare("SELECT course_title, course_content_short, course_id, photo FROM tbl_courses");
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $course) {
    $course_title = $course['course_title'];
    $course_content_short = $course['course_content_short'];
    $course_image = $course['photo'];
    echo  '
          <article class="course">
          <div class="course__image">
            <img src="./assets/uploads/' . $course_image . '" alt="' . $course_title . '" />
          </div>
          <div class="course__info">
            <h4>' . $course_title . '</h4>
            <p>
              ' . $course_content_short . '
            </p>
            <a href="courses.php" class="btn btn-primary">Learn More</a>
          </div>
        </article>
            ';
  }
}

/**
 * Created by Nas on 9/28/2017.
 */
// scripts here:


 function naturalsci() {

    document.getElementById("natsci").innerHTML = "Welcome to natural sciences" +
    "<div> " +
    " Natural science is a branch of science concerned with the description " +
    " prediction, and understanding of natural phenomena, based on observational" +
    " and empirical evidence. Mechanisms such as peer review and repeatability of " +
    "findings are used to try to ensure the validity of scientific advances." +
    "In natural science, basic science (or pure science) is used to develop information" +
    " to explain phenomena in the natural world" +
    "Natural science can be divided into the following branches </div>" +
    "<ol>" +
    "<Li>Biology</Li>" +
    "<Li>chemistry</Li>" +
    "<Li>physics</Li>" +
    "<Li>Astronomy</Li>" +
    "<Li>oceanography</Li>" +
    "<Li>Earth science</Li></ol>";

}
    function aappliedsci() {

        document.getElementById("appsci").innerHTML = "Welcome to applied sciences" +
        "<div>Applied science is a discipline that is used to apply existing scientific knowledge to" +
        " develop more practical applications,to solve human needs. for example: technology or inventions. " +
        "" +
        "</div>" +
        "some careers in Applied sciences" +
        "<ol>" +
        "<Li>micobiology</Li>" +
        "<Li>Biochemistry</Li>" +
        "<Li>Industrial physics</Li>" +
        "<Li>Agronomy</Li>" +
        "<Li> Architecture</Li>" +
        "<li>forensic science</li>" +
        "<li>health science</li>" +
        "<li>Zoology</li>" +
        "<li>Botany</li>" +
        "<li>Applied physics</li>" +
        "<li>Applied mathematics </li>" +
        "<li>industrial chemistry</li>" +
        "<li>mechanics</li>" +
        "<li>criminology</li>" +
        "<Li>computer science</Li></ol>";
    }

    function engineering() {
        document.getElementById("eng").innerHTML = "Welcome to Engineering" +
        "Engineering is the application of scientific knowledge to solving problems " +
        "in the real world" +
        "Engineering enables this understanding to come to life through problem solving," +
        " designing and building things." +
        "some careers in Engineering " +
        "<ol>" +
        "<Li>chemical engineering</Li>" +
        "<Li>mechanical engineering</Li>" +
        "<Li>civil engineering</Li>" +
        "<Li>Biomedical enigineering</Li>" +
        "<Li>Electrical/electronics engineering</Li>" +
        "<Li>material engineering</Li>" +
        "<li>Nuclear engineering</li>" +
        "<li>software engineering</li>" +
        "<li>Aeronautical engineering</li>" +
        "<li>Bio-engineering</li>" +
        "<li>petroleum engineering</li>" +
        "<li>mining engineering </li>" +
        "<li>system  engineering</li>" +
        "<li>mechanics</li>" +
        "<li>criminology</li>" +
        "<li>computer Engineering</li>" +
        "<Li>computer science</Li></ol> ";
    }

    function medicine() {
        var medtalk = document.getElementById("medic").innerHTML =
            "Medicine is the science and practice of the diagnosis, treatment," +
            " and prevention of disease. Medicine encompasses a variety of health " +
            "care practices evolved to maintain and restore health by the prevention " +
            "and treatment of illness. Contemporary medicine applies biomedical sciences," +
            " biomedical research, genetics, and medical technology to diagnose," +
            " treat, and prevent injury and disease, typically through pharmaceuticals or surgery." +
            "some careers in medical sciences " +
            "<ol>" +
            "<Li>pharmacology</Li>" +
            "<Li>Endocrinology</Li>" +
            "<Li>Dentistry</Li>" +
            "<Li>Radiology </Li>" +
            "<Li>Photobiology </Li>" +
            "<Li>physiology </Li>" +
            "<Li>Nursing </Li>" +
            "<li>Embryology </li>" +
            "<li>Neurology </li>" +
            "<li>pathology</li>" +
            "<li>Genetics </li>" +
            "<li>medical physics </li>" +
            "<li>histology </li>" +
            "<li>Epediomology </li>" +
            "<li>paedetrics</li>" +
            "<li>Toxicology </li>" +
            "<Li>laboratory science</Li>" +
            "<Li>Anatomy </Li></ol> ";
    }



        var favoritesubject = document.getElementById("subjectcombo").value;
      function Red() {

          var medtalk = document.getElementById("medical");

          if (medtalk.style.display !== "none") {
              medtalk.style.display = "none";
          } else {
              medtalk.style.display = "block";


          }

      }



function orange() {

    var medtalk = document.getElementById("engine");

    if (medtalk.style.display !== "none") {
        medtalk.style.display = "none";
    } else {
        medtalk.style.display = "block";


    }

}

function green() {

    var medtalk = document.getElementById("applied");

    if (medtalk.style.display !== "none") {
        medtalk.style.display = "none";
    } else {
        medtalk.style.display = "block";


    }

}


function blue() {

    var medtalk = document.getElementById("natural");

    if (medtalk.style.display !== "none") {
        medtalk.style.display = "none";
    } else {
        medtalk.style.display = "block";


    }

}

function indigo() {

    var medtalk = document.getElementById("");

    if (medtalk.style.display !== "none") {
        medtalk.style.display = "none";
    } else {
        medtalk.style.display = "block";


    }

}
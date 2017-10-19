/**
 * Created by Nas on 9/28/2017.
 */
// scripts here:

function submitQuiz() {
    console.log('submitted');

    // get each answer score
    function answerScore (qName) {
        var radiosNo = document.getElementsByName(qName);

        for (var i = 0, length = radiosNo.length; i < length; i++) {
            if (radiosNo[i].checked) {
                // do something with radiosNo
                var answerValue = Number(radiosNo[i].value);
            }
        }
        // change NaNs to zero
        if (isNaN(answerValue)) {
            answerValue = 0;
        }
        return answerValue;
    }

    // calc score with answerScore function

    var socialscore= answerScore('sq1') + answerScore('sq2') + answerScore('sq3') + answerScore('sq4');
     var mathsscore =  answerScore('mq5')+answerScore('mq6')+answerScore('mq7')+answerScore('mq8');
    var  englishscore = +answerScore('eq9')+ answerScore('eq10')+answerScore('eq11')+answerScore('eq12');
    var basicsciscore=answerScore('bq13')+answerScore('bq14')+ answerScore('bq15')+answerScore('bq16');

    var calcScore=(socialscore+mathsscore+englishscore+basicsciscore);
    console.log("CalcScore: " + calcScore); // it works!

    // function to return correct answer string
    function correctAnswer (correctStringNo, qNumber) {
        console.log("qNumber: " + qNumber);  // logs 1,2,3,4 after called below
        return ("The correct answer for question #" + qNumber + ": &nbsp;<strong>" +
        (document.getElementById(correctStringNo).innerHTML) + "</strong>");
    }

    // print correct answers only if wrong (calls correctAnswer function)
    if (answerScore('q1') === 0) {
        document.getElementById('correctAnswer1').innerHTML = correctAnswer('correctString1', 1);
    }
    if (answerScore('q2') === 0) {
        document.getElementById('correctAnswer2').innerHTML = correctAnswer('correctString2', 2);
    }
    if (answerScore('q3') === 0) {
        document.getElementById('correctAnswer3').innerHTML = correctAnswer('correctString3', 3);
    }
    if (answerScore('q4') === 0) {
        document.getElementById('correctAnswer4').innerHTML = correctAnswer('correctString4', 4);
    }

    if (answerScore('q5') === 0) {
        document.getElementById('correctAnswer5').innerHTML = correctAnswer('correctString5', 5);
    }

    if (answerScore('q6') === 0) {
        document.getElementById('correctAnswer6').innerHTML = correctAnswer('correctString6', 6);
    }
    if (answerScore('q7') === 0) {
        document.getElementById('correctAnswer7').innerHTML = correctAnswer('correctString7', 7);
    }

    if (answerScore('q8') === 0) {
        document.getElementById('correctAnswer8').innerHTML = correctAnswer('correctString8', 8);
    }

    if (answerScore('q9') === 0) {
        document.getElementById('correctAnswer9').innerHTML = correctAnswer('correctString9', 9);
    }

    if (answerScore('q10') === 0) {
        document.getElementById('correctAnswer10').innerHTML = correctAnswer('correctString10', 10);
    }
    if (answerScore('q11') === 0) {
        document.getElementById('correctAnswer11').innerHTML = correctAnswer('correctString11', 11);
    }
    if (answerScore('q12') === 0) {
        document.getElementById('correctAnswer12').innerHTML = correctAnswer('correctString12', 12);
    }

    if (answerScore('q13') === 0) {
        document.getElementById('correctAnswer13').innerHTML = correctAnswer('correctString13', 13);
    }

    if (answerScore('q14') === 0) {
        document.getElementById('correctAnswer14').innerHTML = correctAnswer('correctString14', 14);
    }
    if (answerScore('q15') === 0) {
        document.getElementById('correctAnswer15').innerHTML = correctAnswer('correctString15', 15);
    }

    if (answerScore('q16') === 0) {
        document.getElementById('correctAnswer16').innerHTML = correctAnswer('correctString16', 16);
    }


    // calculate "possible score" integer
    var questionCountArray = document.getElementsByClassName('question');

    var questionCounter = 0;
    for (var i = 0, length = questionCountArray.length; i < length; i++) {
        questionCounter++;
    }

    // show score as "score/possible score"
    var showScore = "Your Score: " + (calcScore*5) +"/" + (questionCounter*5);

    var showsocailscore ="you score:"+(socialscore*5)+ "% in social studies";
    var showmathsscore ="you score:"+(mathsscore*5)+ "% in mathematics";
    var showsenglishscore ="you score:"+(englishscore*5)+ "% in english language";
    var showbasicsciscore ="you score:"+(basicsciscore*5)+ "% in Basic science";

    var scienceclass = ((mathsscore*5) +(basicsciscore*5));
    var artclass = ((englishscore*5) +(socialscore*5));

    if (scienceclass > artclass){

        document.getElementById('science').innerHTML = "CONGRATULATION!, YOU ARE GOOD AT SCIENCES";
        document.getElementById('scienceexplorer').innerHTML = "CLICK TO CONTINUE TO SCIENCE CAREER EXPLORER";
    }
    else if(scienceclass==50 ){
        document.getElementById('science').innerHTML = "YOU PROBABLY MIGHT BE GOOD AT SCIENCE" +
        "BUT WORK VERY HARD IF YOU GET THERE";
        document.getElementById('scienceexplorer').innerHTML = "CLICK TO CONTINUE TO SCIENCE CAREER EXPLORER";

    }
    else if(artclass==50 ){
        document.getElementById('science').innerHTML = "YOU PROBABLY MIGHT BE GOOD AT ART" +
        "BUT WORK VERY HARD IF YOU GET THERE";
        document.getElementById('artexplorer').innerHTML = "CLICK TO CONTINUE TO ART AND SOCIAL SCIENCE" +
        " CAREER EXPLORER";

    }
    else if(artclass > scienceclass) {
        document.getElementById('science').innerHTML = "CONGRATULATIONS!," +
        "YOU ARE GOOD AT ART AND SOCIAL SCIENCES!";
        document.getElementById('artexplorer').innerHTML = "CLICK TO CONTINUE TO ART AND SOCIAL SCIENCE" +
        " CAREER EXPLORER";
    }
    else
        document.getElementById('science').innerHTML = "NO CLASS FOUND YET ANSWER THE QUESTIONS" ;

    // if 16/16, "perfect score!"

    var careershow ="Now. head to career Explorer ! ";
    var congrats =" congratulations ! <br> see the analysis of your score";
    if (calcScore === questionCounter) {
        showScore = showScore + "&nbsp; <strong>Perfect Score!</strong>"
    };

    document.getElementById('userScore').innerHTML = showScore;

    document.getElementById('userScoresocial').innerHTML = showsocailscore;
    document.getElementById('userScoremaths').innerHTML = showmathsscore;
    document.getElementById('userScoreenglish').innerHTML = showsenglishscore;
    document.getElementById('userScorebasicsci').innerHTML = showbasicsciscore;
    document.getElementById('career').innerHTML = careershow;
    document.getElementById('usercongrats').innerHTML = congrats;
}

$(document).ready(function() {

    $('#submitButton').click(function() {
        $(this).addClass('hide');
    });

});
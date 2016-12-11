$('#quiz').quiz({
  //resultsScreen: '#results-screen',
  //counter: false,
  //homeButton: '#custom-home',
  counterFormat: 'Question %current of %total',
  questions: [
    {
      'q': 'Question 1, bonne réponse : A',
      'options': [
        'A',
        'B'
      ],
      'correctIndex': 0,
      'correctResponse': 'Bonne réponse, bravo !',
      'incorrectResponse': 'Mauvaise réponse'
    },
    {
      'q': 'Question 2, bonne réponse : C ',
      'options': [
        'A',
        'B',
        'C'
      ],
      'correctIndex': 2,
      'correctResponse': 'Très bien !',
      'incorrectResponse': 'C\'est faux !'
    },
    {
      'q': 'Question 3, bonne réponse : A',
      'options': [
        'A',
        'A'
      ],
      'correctIndex': 0,
      'correctResponse': 'Bien',
      'incorrectResponse': 'Mauvaise réponse'
    },
    {
      'q': 'Question 4, bonne réponse : C',
      'options': [
        'A',
        'B',
        'C'
      ],
      'correctIndex': 2,
      'correctResponse': 'Bravo',
      'incorrectResponse': 'Mauvaise réponse'
    }
  ]
});

<link rel="stylesheet" href="style.css">


<form method="POST" action="handle-question.php" class="form-basic">

    <h2>Questionnaire</h2>

    <div class="form-row">
        <label>Prénom (Facultatif)</label>
        <input type="text" name="prenom">
    </div>

    <div class="form-row">
        <label>Nom (Facultatif)</label>
        <input type="text" name="nom">
    </div>

    <div class="form-row">
        <label>Email (Obligatoire)</label>
        <input type="email" name="email">
    </div>

    <!-- Question 1 -->
    <div class="question">
        <p>1. Comment étaient vos dernières journées ?</p>
        <label><input type="radio" name="question_1" value="1">1</label>
        <label><input type="radio" name="question_1" value="2">2</label>
        <label><input type="radio" name="question_1" value="3">3</label>
        <label><input type="radio" name="question_1" value="4">4</label>
        <label><input type="radio" name="question_1" value="5">5</label>
        <label><input type="radio" name="question_1" value="6">6</label>
        <label><input type="radio" name="question_1" value="7">7</label>
        <label><input type="radio" name="question_1" value="8">8</label>
        <label><input type="radio" name="question_1" value="9">9</label>
        <label><input type="radio" name="question_1" value="10">10</label>
    </div>

    <!-- Question 2 -->
    <div class="question">
        <p>2. Est-ce que vous avez des personnes de votre entourage qui vous influencent ?</p>
        <label><input type="radio" name="question_2" value="1">1</label>
        <label><input type="radio" name="question_2" value="2">2</label>
        <label><input type="radio" name="question_2" value="3">3</label>
        <label><input type="radio" name="question_2" value="4">4</label>
        <label><input type="radio" name="question_2" value="5">5</label>
        <label><input type="radio" name="question_2" value="6">6</label>
        <label><input type="radio" name="question_2" value="7">7</label>
        <label><input type="radio" name="question_2" value="8">8</label>
        <label><input type="radio" name="question_2" value="9">9</label>
        <label><input type="radio" name="question_2" value="10">10</label>
    </div>

    <!-- Question 3 -->
    <div class="question">
        <p>3. Est-ce que vos parents sont séparés ?</p>
        <label><input type="radio" name="question_3" value="1">1</label>
        <label><input type="radio" name="question_3" value="2">2</label>
        <label><input type="radio" name="question_3" value="3">3</label>
        <label><input type="radio" name="question_3" value="4">4</label>
        <label><input type="radio" name="question_3" value="5">5</label>
        <label><input type="radio" name="question_3" value="6">6</label>
        <label><input type="radio" name="question_3" value="7">7</label>
        <label><input type="radio" name="question_3" value="8">8</label>
        <label><input type="radio" name="question_3" value="9">9</label>
        <label><input type="radio" name="question_3" value="10">10</label>
    </div>

    <!-- Question 4 -->
    <div class="question">
        <p>4. Est-ce que vous voyez des amis / famille ?</p>
        <label><input type="radio" name="question_4" value="1">1</label>
        <label><input type="radio" name="question_4" value="2">2</label>
        <label><input type="radio" name="question_4" value="3">3</label>
        <label><input type="radio" name="question_4" value="4">4</label>
        <label><input type="radio" name="question_4" value="5">5</label>
        <label><input type="radio" name="question_4" value="6">6</label>
        <label><input type="radio" name="question_4" value="7">7</label>
        <label><input type="radio" name="question_4" value="8">8</label>
        <label><input type="radio" name="question_4" value="9">9</label>
        <label><input type="radio" name="question_4" value="10">10</label>
    </div>

    <!-- Question 5 -->
    <div class="question">
        <p>5. Est-ce que vous aimez votre quotidien ?</p>
        <label><input type="radio" name="question_5" value="1">1</label>
        <label><input type="radio" name="question_5" value="2">2</label>
        <label><input type="radio" name="question_5" value="3">3</label>
        <label><input type="radio" name="question_5" value="4">4</label>
        <label><input type="radio" name="question_5" value="5">5</label>
        <label><input type="radio" name="question_5" value="6">6</label>
        <label><input type="radio" name="question_5" value="7">7</label>
        <label><input type="radio" name="question_5" value="8">8</label>
        <label><input type="radio" name="question_5" value="9">9</label>
        <label><input type="radio" name="question_5" value="10">10</label>
    </div>

    <!-- Question 6 -->
    <div class="question">
        <p>6. Est-ce que quelque chose vous préoccupe en ce moment ?</p>
        <label><input type="radio" name="question_6" value="1">1</label>
        <label><input type="radio" name="question_6" value="2">2</label>
        <label><input type="radio" name="question_6" value="3">3</label>
        <label><input type="radio" name="question_6" value="4">4</label>
        <label><input type="radio" name="question_6" value="5">5</label>
        <label><input type="radio" name="question_6" value="6">6</label>
        <label><input type="radio" name="question_6" value="7">7</label>
        <label><input type="radio" name="question_6" value="8">8</label>
        <label><input type="radio" name="question_6" value="9">9</label>
        <label><input type="radio" name="question_6" value="10">10</label>
    </div>

    <!-- Question 7 -->
    <div class="question">
        <p>7. Est-ce que vous êtes créatif(ve) dans ce que vous faites ?</p>
        <label><input type="radio" name="question_7" value="1">1</label>
        <label><input type="radio" name="question_7" value="2">2</label>
        <label><input type="radio" name="question_7" value="3">3</label>
        <label><input type="radio" name="question_7" value="4">4</label>
        <label><input type="radio" name="question_7" value="5">5</label>
        <label><input type="radio" name="question_7" value="6">6</label>
        <label><input type="radio" name="question_7" value="7">7</label>
        <label><input type="radio" name="question_7" value="8">8</label>
        <label><input type="radio" name="question_7" value="9">9</label>
        <label><input type="radio" name="question_7" value="10">10</label>
    </div>

    <!-- Question 8 -->
    <div class="question">
        <p>8. Est-ce que vous vous exprimez en société ?</p>
        <label><input type="radio" name="question_8" value="1">1</label>
        <label><input type="radio" name="question_8" value="2">2</label>
        <label><input type="radio" name="question_8" value="3">3</label>
        <label><input type="radio" name="question_8" value="4">4</label>
        <label><input type="radio" name="question_8" value="5">5</label>
        <label><input type="radio" name="question_8" value="6">6</label>
        <label><input type="radio" name="question_8" value="7">7</label>
        <label><input type="radio" name="question_8" value="8">8</label>
        <label><input type="radio" name="question_8" value="9">9</label>
        <label><input type="radio" name="question_8" value="10">10</label>
    </div>

    <!-- Question 9 -->
    <div class="question">
        <p>9. Est-ce que vous êtes souvent frustré(e) ?</p>
        <label><input type="radio" name="question_9" value="1">1</label>
        <label><input type="radio" name="question_9" value="2">2</label>
        <label><input type="radio" name="question_9" value="3">3</label>
        <label><input type="radio" name="question_9" value="4">4</label>
        <label><input type="radio" name="question_9" value="5">5</label>
        <label><input type="radio" name="question_9" value="6">6</label>
        <label><input type="radio" name="question_9" value="7">7</label>
        <label><input type="radio" name="question_9" value="8">8</label>
        <label><input type="radio" name="question_9" value="9">9</label>
        <label><input type="radio" name="question_9" value="10">10</label>
    </div>

    <!-- Question 10 -->
    <div class="question">
        <p>10. Est-ce que vous prenez du plaisir dans ce que vous produisez (projets) ?</p>
        <label><input type="radio" name="question_10" value="1">1</label>
        <label><input type="radio" name="question_10" value="2">2</label>
        <label><input type="radio" name="question_10" value="3">3</label>
        <label><input type="radio" name="question_10" value="4">4</label>
        <label><input type="radio" name="question_10" value="5">5</label>
        <label><input type="radio" name="question_10" value="6">6</label>
        <label><input type="radio" name="question_10" value="7">7</label>
        <label><input type="radio" name="question_10" value="8">8</label>
        <label><input type="radio" name="question_10" value="9">9</label>
        <label><input type="radio" name="question_10" value="10">10</label>
    </div>

    <button type="submit" class="btn-basic">Envoyer</button>
</form>


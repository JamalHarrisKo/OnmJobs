<div class="mail">
    <h2>Bewerbung als {{ $jobapplication }}</h2>
    <h3>Bewerberdaten:
    </h3>
    <div class="mail-block">
        <p><strong>Vorname:</strong> {{ $firstname }}</p>
        <p><strong>Nachname:</strong> {{ $lastname}}</p>
        <p><strong>Email:</strong> {{ $email}}</p>
        <p><strong>Telefonnummer:</strong> {{ $phone}}</p>
    </div>
    <br>
    <h3>Programmier Kenntnisse:</h3>
    <div class="mail-block">
        <p><strong>Html&CSS:</strong> {{ $html_css }}</p>
        <p><strong>PHP:</strong> {{ $php}} </p>
        <p><strong>MySQL:</strong> {{$mysql}} </p>
        <p><strong>JavaScript:</strong> {{$js}}</p>
        <p><strong>Frontend Frameworks:</strong> {{ $frontendFrameworks }}</p>
    </div>
    <br>
    <br>
    <h3>CMS Kenntnisse</h3>
    <div class="mail-block">
        <p><strong>Wordpress: </strong> {{ $wordpress}}</p>
        <p><strong>Typo3: </strong> {{$typo3}}</p>
    </div>
    <br>
    <h3>Sonstige Anmerkungen:</h3>
    <div class="mail-block">
        <p>{{ $bonusText }}</p>
    </div>
</div>
<style>
    .mail {
        font-family: Arial, Helvetica, sans-serif;
        padding: 1rem;
    }
    h3{
        margin-bottom: 1.5rem;
        margin-top: 0;
    }
    h2{
        margin-bottom: 2.5rem;
    }

    .mail-block {
        display: flex;
        flex-direction: column;
        /* margin-bottom: 1rem; */
        width: 800px;
        flex-wrap: wrap;
        /* padding: 1rem; */
        /* max-width: 800px; */
    }

    .mail-block p {
        width: 50%;
        margin-top: 0;
    }
</style>
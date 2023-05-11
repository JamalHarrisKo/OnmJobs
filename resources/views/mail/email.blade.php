<div class="mail">
    <h2>Bewerbung als {{ $jobapplication }}</h2>
    <h3>Bewerberdaten:
    </h3>
    <div class="mail-block">
        <p><strong>Vorname:</strong> {{ $firstname }}</p>
        <p><strong>Nachname:</strong> {{ $lastname}}</p>
        <p><strong>Email:</strong> {{ $email}}</p>
        <p><strong>Telefonnummer:</strong> {{ $phone}}</p>
        @if ($salary!=='')
        <p><strong>Gehaltsvorstellung:</strong> {{ $salary}}€</p>
        @endif
        @if ($availabilityDate!=='')
        <p><strong>Verfügbarkeitsdatum:</strong> {{ $availabilityDate}}</p>
        @endif
    </div>
    <br>
    <h3>Programmier Kenntnisse:</h3>
    <div class="mail-block">
    @if ($html_css!=='')
        <p><strong>Html&CSS:</strong> {{ $html_css }}</p>
        @endif
        @if ($php!=='')
        <p><strong>PHP:</strong> {{ $php}} </p>
        @endif
        @if ($mysql!=='')
        <p><strong>MySQL:</strong> {{$mysql}} </p>
        @endif
        @if ($js!=='')
        <p><strong>JavaScript:</strong> {{$js}}</p>
        @endif
        @if ($frontendFrameworks!=='')
        <p><strong>Frontend Frameworks:</strong> {{ $frontendFrameworks }}</p>
        @endif
        @if ($frameworks!=='')
        <p><strong>PHP Frameworks</strong> {{ $frameworks}}</p>
        @endif
        @if ($gitlab!=='')
        <p><strong>Gitlab:</strong> {{ $gitlab}}</p>
        @endif
        @if ($vuejs!=='')
        <p><strong>Vue.Js:</strong> {{ $vuejs}}</p>
        @endif
        @if ($angular!=='')
        <p><strong>Angular:</strong> {{ $angular}}</p>
        @endif
        @if ($react!=='')
        <p><strong>React:</strong> {{ $react}}</p>
        @endif
        @if ($uiPrototyping!=='')
        <p><strong>Erstellung von UI-Prototypen / Wireframes:</strong> {{ $uiPrototyping}}</p>
        @endif
        @if ($designer!=='')
        <p><strong>Gespür für Gestaltung und Benutzerführung:</strong> {{ $designer}}</p>
        @endif
        @if ($extbaseFluid!=='')
        <p><strong>Extbase & Fluid:</strong> {{ $extbaseFluid}}</p>
        @endif
        @if ($typoscript!=='')
        <p><strong>Typoscript:</strong> {{ $typoscript}}</p>
        @endif
        @if ($extensionDevelopment!=='')
        <p><strong>Extensionentwicklung:</strong> {{ $extensionDevelopment}}</p>
        @endif
        @if ($typo3management!=='')
        <p><strong>TYPO3 Backend und Benutzerverwaltung:</strong> {{ $typo3management}}</p>
        @endif
        @if ($cSharp!=='')
        <p><strong>C#:</strong> {{ $cSharp}}</p>
        @endif
        @if ($dotnet!=='')
        <p><strong>.net:</strong> {{ $dotnet}}</p>
        @endif
        @if ($pixelbased_imagemanipulation!=='')
        <p><strong>Pixelbasierte Bildbearbeitung:</strong> {{ $pixelbased_imagemanipulation}}</p>
        @endif
        @if ($vektorbased_imagemanipulation!=='')
        <p><strong>Vektorbaiserte Bildbearbeitung:</strong> {{ $vektorbased_imagemanipulation}}</p>
        @endif
    </div>
    <br>
    <br>
    @if ($wordpress!=='' || $typo3!=='')
    <h3>CMS Kenntnisse</h3>
    <div class="mail-block">
        <p><strong>Wordpress: </strong> {{ $wordpress}}</p>
        <p><strong>Typo3: </strong> {{$typo3}}</p>
    </div>
    <br>
    @endif
    @if ($bonusText!=='')
    <h3>Sonstige Anmerkungen:</h3>
    <div class="mail-block">
        <p>{{ $bonusText }}</p>
    </div>
    @endif
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
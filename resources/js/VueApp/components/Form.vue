<template>
    <!-- <FormKit type="form" action="/false">
        <FormKit type="multi-step" tab-style="progress" :allow-incomplete="false">
            <FormKit type="step" name="stepOne"> -->
    <!-- content for stepOne goes here! -->

    <!-- custom validation rule and custom validation message-->
    <!-- <FormKit type="text" label="Name" validation="required|name" :validation-messages="{
                    name: 'name cannot be nameless or nonname',
                }" />
                <FormKit type="text" label="Nachname" validation="required" />
                <FormKit type="email" label="Your Email" validation="required|email" />
            </FormKit>
            <FormKit type="step" name="stepTwo"> -->
    <!-- content for stepOne goes here! -->
    <!-- <FormKit type="radio" label="Wie Gut ist dein Wissen" help="selbsteinschätzung"
                    :options="['gar nicht gut', 'okay', 'Top']" />
            </FormKit>
            <FormKit type="step" name="stepThree"> -->
    <!-- content for stepOne goes here! -->
    <!-- <FormKit type="date" name="date" label="Wann kannst du Anfangen?" validation="required" />
                <FormKit type="select" name="erfahrung" label="Welche Option?" placeholder="auswahl..."
                    :options="['option 1', 'HTML', 'CSS', 'Option 4']" />
            </FormKit>
            <FormKit type="step" name="stepFour"> -->
    <!-- content for stepOne goes here! -->
    <!-- <p>vielen Dank für deine Bewerbung! Klicke auf absenden um deine Bewerbung abszuschicken</p> -->
    <!-- <FormKit type="submit" label="absenden" /> -->
    <!-- </FormKit>
        </FormKit>
    </FormKit> -->
    <div class="formContainer">

        <FormKit id="jobApplication" type="form" action="/sendApplication" method="POST" enctype="multipart/form-data" s>
            <FormKit type="multi-step" tab-style="progress" :allow-incomplete="false">
                <FormKit type="step" name="Angaben zu deiner Person">
                    <!-- content for stepOne goes here! -->

                    <!-- custom validation rule and custom validation message-->
                    <FormKit type="text" label="Vorname" name="vorname" validation="required|name" :validation-messages="{
                        name: 'name cannot be nameless or nonname',
                    }" />
                    <FormKit type="text" label="Nachname" name="nachname" validation="required|name" :validation-messages="{
                        name: 'name cannot be nameless or nonname',
                    }" />
                    <FormKit type="email" label="E-Mail-Adresse" validation="required|email" />
                    <FormKit type="tel" label="Telefonnummer" validation="required" />

                </FormKit>
                <FormKit type="step" name="Programmierkenntnisse?">
                    <p>bitte versuche dich in den nachfolgenden Bereichen realistisch selbst einzuschätzen: </p>
                    <div class="radio_flex">
                        <FormKit type="radio" label="HTML & CSS"
                            :options="['Keine Kentnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']" />
                        <FormKit type="radio" label="PHP"
                            :options="['Keine Kentnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']" />
                        <FormKit type="radio" label="MySQL"
                            :options="['Keine Kentnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']" />
                        <FormKit type="radio" label="JavaScript"
                            :options="['Keine Kentnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']" />
                    </div>
                </FormKit>
                <FormKit type="step" name="Frontend-Frameworks?">
                    <!-- content for stepOne goes here! -->
                    <div class="radio_flex">

                        <FormKit type="radio" label="Frontend-Frameworks"
                            help="(zum Beispiel Boostrap, HTML5 Boilerplate etc.)"
                            :options="['Keine Kentnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']" />
                    </div>
                </FormKit>
                <FormKit type="step" name="CMS?">
                    <!-- content for stepOne goes here! -->
                    <p>bitte versuche dich in den nachfolgenden Bereichen realistisch selbst einzuschätzen: </p>
                    <div class="radio_flex">

                        <FormKit type="radio" label="Wordpress"
                            :options="['Keine Kentnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']" />
                        <FormKit type="radio" label="Typo3"
                            :options="['Keine Kentnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']" />
                    </div>
                </FormKit>
                <FormKit type="step" name="Abschluss">
                    <!-- content for stepOne goes here! -->
                    <FormKit type="file" name='file' placeholder="hell" label="Dokumente" accept=".pdf,.doc,.docx,.xml,.md,.csv"
                        help="Feld anklicken um Datein Auszuwählen, oder per drag-and-drop einfügen (mehrere Datein können durch das halten der strg Taste ausgewählt werden)"
                        multiple="true" validation="required" />

                    <FormKit type="textarea" label="Sonstige Kenntnisse im Bereich" rows="10" placeholder="" />
                    <FormKit wrapper-class="submit_wrapper" type="submit" label="Jetzt Bewerben" />
                </FormKit>
            </FormKit>
        </FormKit>
    </div>
</template>

<script>

// /* SmtpJS.com - v3.0.0 */
// var Email = { send: function (a) { return new Promise(function (n, e) { a.nocache = Math.floor(1e6 * Math.random() + 1), a.Action = "Send"; var t = JSON.stringify(a); Email.ajaxPost("https://smtpjs.com/v3/smtpjs.aspx?", t, function (e) { n(e) }) }) }, ajaxPost: function (e, n, t) { var a = Email.createCORSRequest("POST", e); a.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), a.onload = function () { var e = a.responseText; null != t && t(e) }, a.send(n) }, ajax: function (e, n) { var t = Email.createCORSRequest("GET", e); t.onload = function () { var e = t.responseText; null != n && n(e) }, t.send() }, createCORSRequest: function (e, n) { var t = new XMLHttpRequest; return "withCredentials" in t ? t.open(e, n, !0) : "undefined" != typeof XDomainRequest ? (t = new XDomainRequest).open(e, n) : t = null, t } };
// Email.send({
//     Host : "onm.info",
//     Username : "hotelsuite@onm.info",
//     Password : "Y_brcsnq0is64TYg1",
//     To : 'jh@onm.de',
//     From : "hotelsuite@onm.info",
//     Subject : "This is the subject",
//     Body : "And this is the body"
// }).then(
//   message => alert(message)
// );

// cant use this --> only works with elastic mail

// send email using strapi
// await strapi.plugins['email'].services.email.send({
//     to: 'jh@onm.de',
//     from: 'info@onm.de', //e.g. single sender verification in SendGrid
//     // cc: 'valid email address',
//     // bcc: 'valid email address',
//     replyTo: 'info@onm.de',
//     subject: 'The Strapi Email plugin worked successfully',
//     text: 'Hello world!',
//     html: 'Hello world!',
//   }),




</script>

<style>
.radio_flex {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 2rem;
    flex-grow: 1;
    justify-content: center;
}

.radio_flex .formkit-outer {
    min-width: 300px;
    margin: 1rem;
    flex-grow: 1;
}

/* radio buttons */
[data-type="checkbox"] .formkit-input:checked~.formkit-decorator .formkit-icon,
[data-type="radio"] .formkit-input:checked~.formkit-decorator .formkit-icon {
    color: #ff8c00 !important;
}

[data-type="checkbox"] .formkit-input:checked~.formkit-decorator,
[data-type="radio"] .formkit-input:checked~.formkit-decorator {
    box-shadow: 0 0 0 1px #ff8c00 !important;
}

.submit_wrapper {
    display: flex;
    justify-content: center;
    width: 100%;
}

:root {
    --multistep-color-success: #ff8c00 !important;
}

[data-type="button"] .formkit-input {
    background-color: white !important;
    border: 2px solid #ff8c00 !important;
    color: #ff8c00 !important;
}

[data-type="submit"] .formkit-input {
    background-color: #ff8c00 !important;
    font-size: 1.1rem !important;
    /* text-transform: uppercase; */
}

.formContainer {
    margin-bottom: 5rem;
}

.formkit-wrapper {
    margin: 0 auto;
    /* margin-bottom: 5rem; */
}

.formkit-outer[data-type="multi-step"]>[data-tab-style="progress"]>.formkit-tabs .formkit-tab-label {
    white-space: break-spaces !important;
}

.formkit-outer[data-type="multi-step"]>.formkit-wrapper {
    min-width: 800px;
    max-width: 100%;
}
</style>
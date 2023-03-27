<template>
    <Formkit type="form" :actions="false">
        <FormKit type="multi-step" tab-style="progress" :allow-incomplete="false">
            <FormKit type="step" name="stepOne">
                <!-- content for stepOne goes here! -->
                <FormKit type="text" label="Name" validation="required" />
                <FormKit type="text" label="Nachname" validation="required" />
                <FormKit type="email" label="Your Email" validation="required|email" />
            </FormKit>
            <FormKit type="step" name="stepTwo">
                <!-- content for stepOne goes here! -->
                <FormKit type="radio" label="Wie Gut ist dein Wissen" help="selbsteinschätzung"
                    :options="['gar nicht gut', 'okay', 'Top']" />
            </FormKit>
            <FormKit type="step" name="stepThree">
                <!-- content for stepOne goes here! -->
                <FormKit type="date" name="date" label="Wann kannst du Anfangen?" validation="required" />
                <FormKit type="select" name="erfahrung" label="Welche Option?" placeholder="auswahl..."
                    :options="['option 1', 'HTML', 'CSS', 'Option 4']" />
            </FormKit>
            <FormKit type="step" name="stepFour">
                <!-- content for stepOne goes here! -->
                <p>vielen Dank für deine Bewerbung! Klicke auf absenden um deine Bewerbung abszuschicken</p>
                <FormKit type="submit" label="absenden" />
            </FormKit>
        </FormKit>
    </Formkit>
    <p>testformular zum versenden</p>
    <form id="jobApplication" action="/testroute" method="POST" enctype="multipart/form-data">
        <input type="text" name="name">
        <input type="text" name="text">
        <input type="file" name="file">
        <input type="submit">
    </form>
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
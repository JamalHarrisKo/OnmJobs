<template>
    <div class="formContainer">
        <FormKit id="jobApplication" type="form" action="/sendApplication" method="POST" enctype="multipart/form-data">
            <FormKit type="multi-step" tab-style="progress" :allow-incomplete="false">
                <FormKit type="step" name="Angaben zu deiner Person">
                    <FormKit type="text" label="Vorname" name="firstname" validation="required|alpha" :validation-messages="{
                        alpha: 'der Vorname darf keine Zahlen enthalten',
                        required: 'dies ist ein Pflichtfeld'
                    }" />
                    <FormKit type="text" label="Nachname" name="lastname" validation="required|alpha" :validation-messages="{
                        alpha: 'der Nachname darf keine Zahlen enthalten',
                        required: 'dies ist ein Pflichtfeld'

                    }" />
                    <FormKit type="email" name="email" label="E-Mail-Adresse" validation="required|email"
                        :validation-messages="{
                            email: 'bitte eine Gültige E-Mail verwenden',
                            required: 'dies ist ein Pflichtfeld'

                        }" />
                    <FormKit type="tel" name="phone" label="Telefonnummer" validation="required|matches:/^[0-9\s]*$/" :validation-messages="{
                        required: 'dies ist ein Pflichtfeld',
                        matches: 'die Telefonnummer darf nur aus Zahlen bestehen'
                    }" />
                </FormKit>
                <FormKit type="step" name="Programmierkenntnisse?">
                    <p>bitte versuche dich in den nachfolgenden Bereichen realistisch selbst einzuschätzen: </p>
                    <div class="radio_flex">
                        <FormKit type="radio" name="html_css" label="HTML & CSS"
                            :options="['Keine Kentnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                            validation="required" :validation-messages="{
                                required: 'dies ist ein Pflichtfeld'
                            }" />
                        <FormKit type="radio" name='php' label="PHP"
                            :options="['Keine Kentnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                            validation="required" :validation-messages="{
                                required: 'dies ist ein Pflichtfeld'
                            }" />
                        <FormKit type="radio" name="mysql" label="MySQL"
                            :options="['Keine Kentnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                            validation="required" :validation-messages="{
                                required: 'dies ist ein Pflichtfeld'
                            }" />
                        <FormKit type="radio" name='js' label="JavaScript"
                            :options="['Keine Kentnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                            validation="required" :validation-messages="{
                                required: 'dies ist ein Pflichtfeld'
                            }" />
                    </div>
                </FormKit>
                <FormKit type="step" name="Frontend-Frameworks?">
                    <div class="radio_flex">
                        <FormKit type="radio" name="frontendFrameworks" label="Frontend-Frameworks"
                            help="(zum Beispiel Boostrap, HTML5 Boilerplate etc.)"
                            :options="['Keine Kentnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                            validation="required" :validation-messages="{
                        required: 'dies ist ein Pflichtfeld'
                    }" />
                    </div>
                </FormKit>
                <FormKit type="step" name="CMS?">
                    <p>bitte versuche dich in den nachfolgenden Bereichen realistisch selbst einzuschätzen: </p>
                    <div class="radio_flex">

                        <FormKit type="radio" name='wordpress' label="Wordpress"
                            :options="['Keine Kentnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']" 
                            validation="required" :validation-messages="{
                        required: 'dies ist ein Pflichtfeld'
                    }"/>
                        <FormKit type="radio" name='typo3' label="Typo3"
                            :options="['Keine Kentnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']" 
                            validation="required" :validation-messages="{
                        required: 'dies ist ein Pflichtfeld'
                    }"/>
                    </div>
                </FormKit>
                <FormKit type="step" name="Abschluss">
                    <FormKit type="file" name='file' label="Dokumente"
                        accept=".pdf,.docx,.xml,.md,.csv"
                        help="Feld anklicken um PDF-Datein Auszuwählen, oder per drag-and-drop einfügen (mehrere Datein können durch das halten der strg Taste ausgewählt werden)"
                        multiple="true" validation="(500)required|*file" :validation-messages="{
                            required:'dies ist ein Pflichtfeld',
                            file: 'bitte Datein vom Typ \'.pdf\' auswählen'
                        }"/>
                    <FormKit type="textarea" name="bonusText" label="Sonstige Kenntnisse im Bereich" rows="10"
                        placeholder="" />
                    <FormKit name="jobapplication" type="hidden" value="PHP Entwickler" />
                    <FormKit type="checkbox" label="Datenschutz" validation="accepted" :validation-messages="{
                        accepted:'bitte aktzeptiere die Datenschutzbedingungen'
                    }" />
                    <p class="gdpr_text">Ja, ich habe die <a href="https://google.de">Datenschutzerklärung</a> zur Kenntnis
                        genommen und bin damit einverstanden, dass die von mir angegebenen Daten elektronisch erhoben und
                        gespeichert werden. Meine Daten werden dabei nur streng zweckgebunden zur Bearbeitung und
                        Beantwortung meiner Bewerbung benutzt. Mit dem Absenden des Bewerbungsformulars erkläre ich mich mit
                        der Verarbeitung einverstanden.</p>
                    <FormKit wrapper-class="submit_wrapper" type="submit" label="Jetzt Bewerben" />
                </FormKit>
            </FormKit>
        </FormKit>
    </div>
</template>

<script>

</script>

<style>
.formkit-messages:not(.formkit-wrapper .formkit-messages){
    display: none;
}
.gdpr_text {
    font-size: 0.9rem;
    color: gray;
    margin-top: 0;
    padding-bottom: 1rem;
}

.gdpr_text a {
    color: #ff8c00;
    text-decoration: none;
}

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
}</style>
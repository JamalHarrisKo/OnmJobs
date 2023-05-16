<template>
    <div class="formContainer">
        <FormKit id="jobApplication" class="dropzone" type="form" action="/sendApplication" method="POST"
            enctype="multipart/form-data">
            <FormKit type="multi-step" tab-style="progress" :allow-incomplete="false">
                <FormKit type="step" name="Angaben zu deiner Person">

                    <p class="formkit_tab_title">Angaben zu deiner Person</p>
                    <FormKit type="text" label="Vorname" name="firstname" validation="required|alpha" :validation-messages="{
                        alpha: 'der Vorname darf keine Zahlen enthalten',
                        required: 'dies ist ein Pflichtfeld'
                    }" />
                    <FormKit type="text" label="Nachname" name="lastname" validation="required|alpha" :validation-messages="{
                        alpha: 'der Nachname darf keine Zahlen enthalten',
                        required: 'dies ist ein Pflichtfeld'
                    }" />
                    <!-- <div id="dropzone" class="dropzone">hello</div> -->

                    <FormKit type="email" name="email" label="E-Mail-Adresse" validation="required|email"
                        :validation-messages="{
                            email: 'bitte eine Gültige E-Mail verwenden',
                            required: 'dies ist ein Pflichtfeld'
                        }" />
                    <FormKit type="tel" name="phone" label="Telefonnummer" validation="required|matches:/^[0-9\s]*$/"
                        :validation-messages="{
                            required: 'dies ist ein Pflichtfeld',
                            matches: 'die Telefonnummer darf nur aus Zahlen bestehen'
                        }" />

                    <div
                        v-if="Formname == 'PHP Entwickler' || Formname == 'Frontendentwickler' || Formname == 'Typo3-Entwickler' || Formname == 'Webentwickler C#/.net'">
                        <FormKit type="text" label="Gehaltsvorstellung (in Euro)" name="salary"
                            validation="required|matches:/^[0-9\s]*$/" :validation-messages="{
                                required: 'dies ist ein Pflichtfeld',
                                matches: 'bitte als Zahl (in Euro) Angeben'
                            }" />
                        <FormKit type="date" label="Verfügbar ab" name="availabilityDate" validation="required"
                            :validation-messages="{
                                required: 'dies ist ein Pflichtfeld'
                            }" />
                    </div>
                </FormKit>
                <!-------------------------------------------Form Dev (Azubi)-------------------------------------------->
                <div v-if="Formname == 'Fachinformatiker Anwendungsentwicklung (Azubi)'">
                    <FormKit type="step" name="Programmierkenntnisse?">
                        <p class="formkit_tab_title">Programmierkenntnisse?</p>
                        <p>bitte versuche dich in den nachfolgenden Bereichen realistisch selbst einzuschätzen: </p>
                        <div class="radio_flex">
                            <FormKit type="radio" name="html_css" label="HTML & CSS"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='php' label="PHP"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name="mysql" label="MySQL"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='js' label="JavaScript"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                        </div>
                    </FormKit>
                    <FormKit type="step" name="Frontend-Frameworks?">
                        <p class="formkit_tab_title">Frontend-Frameworks?</p>
                        <div class="radio_flex">
                            <FormKit type="radio" name="frontendFrameworks" label="Frontend-Frameworks"
                                help="(zum Beispiel Boostrap, HTML5 Boilerplate etc.)"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                        </div>
                    </FormKit>
                    <FormKit type="step" name="CMS?">
                        <p class="formkit_tab_title">CMS?</p>

                        <p>bitte versuche dich in den nachfolgenden Bereichen realistisch selbst einzuschätzen: </p>
                        <div class="radio_flex">

                            <FormKit type="radio" name='wordpress' label="Wordpress"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='typo3' label="Typo3"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                        </div>
                    </FormKit>
                </div>
                <!-------------------------------------------END Form Dev (Azubi)-------------------------------------------->
                <!-------------------------------------------Form Desinger (Azubi)-------------------------------------------->
                <div v-if="Formname == 'Mediengestalter (Azubi)'">
                    <FormKit type="step" name="Gestaltung?">
                        <p class="formkit_tab_title">Gestaltung?</p>

                        <p>bitte versuche dich in den nachfolgenden Bereichen realistisch selbst einzuschätzen: </p>
                        <div class="radio_flex">
                            <FormKit type="radio" name="pixelbased_imagemanipulation" label="Pixelbasierte Bildbearbeitung"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='vektorbased_imagemanipulation'
                                label="Vektorbaiserte Bildbearbeitung"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                        </div>
                    </FormKit>
                    <FormKit type="step" name="Programmierkenntnisse?">
                        <p class="formkit_tab_title">Programmierkenntnisse?</p>
                        <p>bitte versuche dich in den nachfolgenden Bereichen realistisch selbst einzuschätzen: </p>
                        <div class="radio_flex">
                            <FormKit type="radio" name="html_css" label="HTML & CSS"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='php' label="PHP"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name="mysql" label="MySQL"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='js' label="JavaScript"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                        </div>
                    </FormKit>
                    <FormKit type="step" name="Frontend-Frameworks?">
                        <p class="formkit_tab_title">Frontend-Frameworks?</p>
                        <div class="radio_flex">
                            <FormKit type="radio" name="frontendFrameworks" label="Frontend-Frameworks"
                                help="(zum Beispiel Boostrap, HTML5 Boilerplate etc.)"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                        </div>
                    </FormKit>
                </div>
                <!-------------------------------------------Form Desinger (Azubi)END-------------------------------------------->

                <!-------------------------------------------Form PHP Dev -------------------------------------------->
                <div v-if="Formname == 'PHP Entwickler'">
                    <FormKit type="step" name="Programmierkenntnisse?">
                        <p class="formkit_tab_title">Programmierkenntnisse?</p>

                        <p>bitte versuche dich in den nachfolgenden Bereichen realistisch selbst einzuschätzen: </p>
                        <div class="radio_flex">
                            <FormKit type="radio" name='php' label="PHP"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='frameworks' label="Frameworks (Laravel, o.a.)"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />

                            <FormKit type="radio" name="mysql" label="MySQL"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />

                            <FormKit type="radio" name="html_css" label="HTML & CSS"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />

                            <FormKit type="radio" name='js' label="JavaScript"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='gitlab' label="Git/Gitlab"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                        </div>
                    </FormKit>
                </div>

                <!-------------------------------------------Form PHP Dev END-------------------------------------------->


                <!-------------------------------------------Form Frontend Dev -------------------------------------------->
                <div v-if="Formname == 'Frontendentwickler'">
                    <FormKit type="step" name="Programmierkenntnisse?">
                        <p class="formkit_tab_title">Programmierkenntnisse?</p>

                        <p>bitte versuche dich in den nachfolgenden Bereichen realistisch selbst einzuschätzen: </p>
                        <div class="radio_flex">
                            <FormKit type="radio" name="html_css" label="HTML & CSS"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />

                            <FormKit type="radio" name='js' label="JavaScript"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='vuejs' label="Vue.js"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='angular' label="Angular"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='react' label="React"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='php' label="PHP"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name="mysql" label="MySQL"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='gitlab' label="Git/Gitlab"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                        </div>
                    </FormKit>
                    <FormKit type="step" name="Kreativität & Konzeption">
                        <p class="formkit_tab_title">Kreativität & Konzeption</p>

                        <div class="radio_flex">
                            <FormKit type="radio" name="uiPrototyping" label="Erstellung von UI-Prototypen / Wireframes"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name="designer" label="Gespür für Gestaltung und Benutzerführung"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                        </div>
                    </FormKit>
                </div>

                <!-------------------------------------------Form Frontend Dev END-------------------------------------------->

                <!-------------------------------------------Form Typo3 Dev -------------------------------------------->
                <div v-if="Formname == 'Typo3-Entwickler'">
                    <FormKit type="step" name="Programmierkenntnisse?">
                        <p class="formkit_tab_title">Programmierkenntnisse?</p>

                        <p>bitte versuche dich in den nachfolgenden Bereichen realistisch selbst einzuschätzen: </p>
                        <div class="radio_flex">
                            <FormKit type="radio" name='extbaseFluid' label="Extbase & Fluid"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='typoscript' label="Typoscript"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='extensionDevelopment' label="Extensionentwicklung"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='mysql' label="MySQL"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name="html_css" label="HTML & CSS"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='js' label="JavaScript"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='php' label="PHP"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                        </div>
                    </FormKit>
                    <FormKit type="step" name="Tools & Diverses">
                        <p class="formkit_tab_title">Tools & Diverses</p>

                        <div class="radio_flex">
                            <FormKit type="radio" name="typo3management" label="TYPO3 Backend und Benutzerverwaltung"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />

                            <FormKit type="radio" name='gitlab' label="Git/Gitlab"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                        </div>
                    </FormKit>
                </div>

                <!-------------------------------------------Form Typo3 Dev END-------------------------------------------->
                <!-------------------------------------------Form Web-Dev -------------------------------------------->
                <div v-if="Formname == 'Webentwickler C#/.net'">
                    <FormKit type="step" name="Programmierkenntnisse?">
                        <p class="formkit_tab_title">Programmierkenntnisse?</p>
                        <p>bitte versuche dich in den nachfolgenden Bereichen realistisch selbst einzuschätzen: </p>
                        <div class="radio_flex">
                            <FormKit type="radio" name="html_css" label="HTML & CSS"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='js' label="JavaScript"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='cSharp' label="C#"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='dotnet' label=".net"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                            <FormKit type="radio" name='gitlab' label="Git/Gitlab"
                                :options="['Keine Kenntnisse', 'Schon mal gehört', 'Schon mal ausprobiert', 'Gute Kenntnisse']"
                                validation="required" :validation-messages="{
                                    required: 'dies ist ein Pflichtfeld'
                                }" />
                        </div>
                    </FormKit>
                </div>

                <!-------------------------------------------Form  Web-Dev END-------------------------------------------->



                <FormKit type="step" name="Abschluss">
                    <p class="formkit_tab_title">Abschluss</p>
                    <!-- <Input type="file" name="file" label="Select your documents to upload"
                        help="Select one or more PDFs to upload" validation="mime:application/pdf" multiple /> -->

                    <FormKit type="file" @change="showFileInputTwo()" id="file" class="file" name='file' label="Dokumente"
                        accept=".pdf,.docx,.xml,.md,.csv" multiple validation="required|*file" :validation-messages="{
                            required: 'dies ist ein Pflichtfeld',
                            file: 'bitte Datein vom Typ \'.pdf\' auswählen'
                        }" :wrapper-class="{
    'file_input_wrapper': true,
}" />
                    <FormKit type="file" @change="showFileInputThree()" id="file2" name='file2'
                        accept=".pdf,.docx,.xml,.md,.csv" :wrapper-class="{
                            'file_input_wrapper file--invisible': true,
                        }" multiple validation="*file" :validation-messages="{
    
    file: 'bitte Datein vom Typ \'.pdf\' auswählen'
}" />
                    <FormKit type="file" id="file3" @change="showFileInputFour()" name='file3'
                        accept=".pdf,.docx,.xml,.md,.csv" :wrapper-class="{
                            'file_input_wrapper file--invisible': true,
                        }" multiple validation="*file" :validation-messages="{
    
    file: 'bitte Datein vom Typ \'.pdf\' auswählen'
}" />
                    <FormKit type="file" id="file4" name='file4' @change="showFileInputFive()"
                        accept=".pdf,.docx,.xml,.md,.csv" :wrapper-class="{
                            'file_input_wrapper file--invisible': true,
                        }" multiple validation="*file" :validation-messages="{
    
    file: 'bitte Datein vom Typ \'.pdf\' auswählen'
}" />
                    <FormKit type="file" id="file5" name='file5' accept=".pdf,.docx,.xml,.md,.csv" :wrapper-class="{
                        'file_input_wrapper file--invisible': true,
                    }" multiple validation="*file" :validation-messages="{
    
    file: 'bitte Datein vom Typ \'.pdf\' auswählen'
}" />
                    <!-- <div id="uploaded_files"></div> -->
                    <!-- <FormKit type="file" name='file' label="Dokumente"
                        accept=".pdf,.docx,.xml,.md,.csv"
                        help="Feld anklicken um PDF-Datein Auszuwählen, oder per drag-and-drop einfügen (mehrere Datein können durch das halten der strg Taste ausgewählt werden)"
                        multiple="true" validation="(500)required" :validation-messages="{
                            required:'dies ist ein Pflichtfeld'
                        }"/> -->
                    <p class="form_explanation_text">Feld anklicken um PDF-Datein Auszuwählen, oder per drag-and-drop einfügen (mehrere Datein können
                        durch das halten der strg Taste ausgewählt werden)</p>

                    <div class="addFileButton" @click="uploadFile(event)">add files</div>
                    <FormKit type="textarea" name="bonusText" label="Sonstige Kenntnisse im Bereich" rows="10"
                        placeholder="" />
                    <FormKit name="jobapplication" type="hidden" :value="Formname" />
                    <FormKit type="checkbox" label="Datenschutz" validation="accepted" :validation-messages="{
                        accepted: 'bitte aktzeptiere die Datenschutzbedingungen'
                    }" />
                    <p class="gdpr_text">Ja, ich habe die <a href="https://google.de">Datenschutzerklärung</a> zur
                        Kenntnis
                        genommen und bin damit einverstanden, dass die von mir angegebenen Daten elektronisch erhoben
                        und
                        gespeichert werden. Meine Daten werden dabei nur streng zweckgebunden zur Bearbeitung und
                        Beantwortung meiner Bewerbung benutzt. Mit dem Absenden des Bewerbungsformulars erkläre ich mich
                        mit
                        der Verarbeitung einverstanden.</p>
                    <FormKit wrapper-class="submit_wrapper" type="submit" id="submitButton" label="Jetzt Bewerben" />
                </FormKit>
            </FormKit>
        </FormKit>
    </div>
</template>

<script>
// import Dropzone from "dropzone";

// if (document.getElementById('dropzone')) {
//     thisdropzone = new Dropzone("#dropzone", { url: "/file/post" });
//     Dropzone.options.dropzone = {
//         url: '/sendApplication',
//         autoProcessQueue: false,
//         uploadMultiple: true,
//         parallelUploads: 5,
//         maxFiles: 5,
//         maxFilesize: 1,
//         acceptedFiles: 'image/*',
//         addRemoveLinks: true,
//         init: function() {
//         dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

//         // for Dropzone to process the queue (instead of default form behavior):
//         document.getElementById("submitButton").addEventListener("click", function(e) {
//             // Make sure that the form isn't actually being sent.
//             e.preventDefault();
//             e.stopPropagation();
//             dzClosure.processQueue();
//         });

//         //send all the form data along with the files:
//         this.on("sendingmultiple", function(data, xhr, formData) {
//             formData.append("firstname", getElementById("firstname").val());
//             formData.append("lastname", getElementById("lastname").val());
//         });
//     }
//     }

//     // other code here
// }

export default {
    name: 'Form',
    props: ['Formname'],
    data() {
        return {

            // dropzone: []

        }


    },
    methods: {
        // updateFiles: function (input) {
        //     console.log('input');
        // }
    },
    mounted() {
        // let myDropzone = new Dropzone("#formDropzone");
        // myDropzone.on("addedfile", file => {
        //     console.log(`File added: ${file.name}`);
        // });
        // document.querySelector('.file').addEventListener('change', showFileInputTwo, false);
        // function showFileInputTwo(){
        //     if(document.querySelector('.file').files){
        //         console.log('yes')
        //     }else{
        //         console.log('no')
        //     }
        // }

        // function showNextFileInput(event){
        //     console.log('----------target-------------')
        //     console.log(event.target)
        //     console.log('----------next target?-------------')
        //     console.log(target.nextSibling)
        //     console.log('----------next target end-------------')
        // }
        // document.getElementById('file_upload').addEventListener('change', dateiauswahl, false);
        function dateiauswahl(evt) {
            // FileList-Objekt des input-Elements auslesen, 
            // wenn das change-Event ausgelöst wurde (event.target)
            if (typeof files == 'undefined') {
                var files = evt.target.files;
            } else {
                alert('it knows')
            }


            // Deklarierung eines Array Objekts mit Namen "fragmente". Hier werden die Bausteine
            // für die erzeugte Listenausgabe gesammelt.
            if (typeof fragmente == 'undefined') {
                var fragmente = [];

            }
            console.log(fragmente)
            // Zählschleife; bei jedem Durchgang den Namen, Typ und 
            // die Dateigröße der ausgewählten Dateien zum Array hinzufügen
            for (var i = 0, f; f = files[i]; i++) {
                fragmente.push('<strong>', f.name, '</strong> (', f.type || 'n/a', ') - ', f.size, ' bytes', '<br>');
            }
            // Alle Fragmente im fragmente Array aneinanderhängen und 
            // alles als HTML-Inhalt in das output-Element mit id='dateiListe' einsetzen.
            document.getElementById('uploaded_files').innerHTML = fragmente.join('');
        }
    },
    methods: {
        showFileInputTwo() {
            if (document.getElementById('file').files) {
                document.getElementById('file2').parentElement.parentElement.classList.remove('file--invisible')
            }
        },
        showFileInputThree() {
            if (document.getElementById('file2').files) {
                document.getElementById('file3').parentElement.parentElement.classList.remove('file--invisible')
            }
        },
        showFileInputFour() {
            if (document.getElementById('file3').files) {
                document.getElementById('file4').parentElement.parentElement.classList.remove('file--invisible')
            }
        },
        showFileInputFive() {
            if (document.getElementById('file4').files) {
                document.getElementById('file5').parentElement.parentElement.classList.remove('file--invisible')
            }
        },
        uploadFile(event) {
            var found = false
            // event.preventDefault()
            console.log('hello')
            // // console.log(document.querySelector('file_input_wrapper:not([file--invisible])'))
            // // // document.querySelector('file_input_wrapper:not([file--invisible])').forEach(function (el) {
            // //     // if (!el.querySelector('input[type=file]').files && !found) {
            // //     //     console.log(el)
            // //     //     console.log('---------------------')
            // //         console.log(document.getElementById('asdffd'))

            // //             document.getElementById('asdffd').click();
            //         document.getElementById('asdffd').click();
            //     //     found = true;
            //     //     console.log(el)
            //     //     return
            //     // }
            // // }
            // // )
            document.querySelectorAll('.file_input_wrapper').forEach(function (el) {
                console.log(el.querySelector('input[type=file]').files.length == 0)
                if (el.querySelector('input[type=file]').files.length == 0 && !found) {
                    el.querySelector('input[type=file]').click();
                    // console.log(el);
                    found = true;
                    return
                }
            })
        }
    }
}
</script>

<style>

.form_explanation_text{
    font-size: 0.9rem;
    color: gray;
    margin-top: 0;
    padding-bottom: 1rem;
}
.addFileButton {
    display: block;
    width: fit-content;
    text-decoration: none;
    padding: 0.7rem 1.8rem;
    border: 2px solid #ff8c00;
    color: #ff8c00;
    border-radius: 5px;
    margin-bottom: 3rem;
    transition: ease 0.2s;
    font-size: 0.875em;
    background-color: #ffffff;
    cursor: pointer;
}

.addFileButton:hover {
    color: #ffffff;
    background-color: #ff8c00;

    transform: scale(1.05);
}

.file--invisible {
    display: none;
}

.formkit-steps {
    /* background-color: #FFFFFF; */
}

.formkit-steps .formkit-inner {
    background-color: #FAF9F6;
}

.formkit-steps textarea {
    /* background-color: #FAF9F6; */
}

.formkit-messages:not(.formkit-wrapper .formkit-messages) {
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
    transition: ease 0.2s;
}

[data-type="button"] .formkit-input:hover {
    background-color: #ff8c00 !important;
    color: white !important;
    transition: ease 0.2s;

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
    max-width: 800px;
    min-width: 60%;
}

.formkit_tab_title {
    display: none;
}

@media(max-width:1400px) {
    .formkit_tab_title {
        /* display: block; */
    }

    .formkit-outer[data-type="multi-step"]>.formkit-wrapper>.formkit-tabs .formkit-tab[data-active="false"] span {
        display: none;
    }

    .formkit-outer[data-type="multi-step"]>.formkit-wrapper>.formkit-tabs .formkit-tab[data-active="true"] span {
        width: fit-content;
    }
}

@media(max-width: 576px) {
    .formkit-tabs {
        margin-bottom: 3rem !important;
    }
}
</style>
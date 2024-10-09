<?php
namespace GroupBuilder\Admin;

class GroupBuilderAdmin {
    public function __construct() {
        $this->setup_admin_actions();
    }

    private function setup_admin_actions() {
        #add_action('admin_init', [$this, 'register_settings']);
    }

    /**
     * Register the settings for the group builder
     */
    public function register_settings() {

        acfe_register_form(array(
            'name' => 'edit_group',
            'title' => 'Gruppe beschreiben',
            'active' => true,
            'field_groups' => array(
                'group_669f7067938e7',
            ),
            'settings' => array(
                'location' => false,
                'honeypot' => true,
                'kses' => true,
                'uploader' => 'default',
            ),
            'attributes' => array(
                'form' => array(
                    'element' => 'form',
                    'class' => '',
                    'id' => '',
                ),
                'fields' => array(
                    'element' => 'div',
                    'wrapper_class' => '',
                    'class' => '',
                    'label' => 'top',
                    'instruction' => 'label',
                ),
                'submit' => array(
                    'value' => 'Speichern',
                    'button' => '<input type="submit" class="acf-button button button-primary button-large" value="%s" />',
                    'spinner' => '<span class="acf-spinner"></span>',
                ),
            ),
            'validation' => array(
                'hide_error' => false,
                'hide_revalidation' => false,
                'hide_unload' => false,
                'errors_position' => 'above',
                'errors_class' => '',
                'messages' => array(
                    'failure' => 'Die Überprüfung ist fehlgeschlagen',
                    'success' => 'Die Überprüfung war erfolgreich',
                    'error' => '1 Feld erfordert Aufmerksamkeit',
                    'errors' => '%d Felder erfordern Aufmerksamkeit',
                ),
            ),
            'success' => array(
                'hide_form' => false,
                'scroll' => false,
                'message' => 'Die Gruppenkonfiguration wurde erfolgreich gespeichert.',
                'wrapper' => '<div id="message" class="updated">%s</div>',
            ),
            'actions' => array(
                array(
                    'action' => 'post',
                    'name' => 'update_group',
                    'type' => 'update_post',
                    'save' => array(
                        'target' => '{post}',
                        'post_type' => 'group_post',
                        'post_status' => 'publish',
                        'post_title' => '{field:field_669f70690edc9}',
                        'post_name' => '',
                        'post_content' => '{field:field_669f70a10edca}',
                        'post_excerpt' => '{field:field_669f70f00edcb}',
                        'post_author' => '',
                        'post_parent' => '',
                        'post_date' => '',
                        'post_thumbnail' => '{field:field_669f710f0edcc}',
                        'post_terms' => '',
                        'append_terms' => '',
                        'acf_fields' => array(
                            'field_669f710f0edcc',
                            'field_669f70690edc9',
                            'field_669f70f00edcb',
                            'field_669f70a10edca',
                            'field_66aa5decb7c4c',
                            'field_66b87286c6172',
                        ),
                    ),
                    'load' => array(
                        'source' => '{post}',
                        'post_type' => '',
                        'post_status' => '',
                        'post_title' => '',
                        'post_name' => '',
                        'post_content' => '',
                        'post_excerpt' => '',
                        'post_author' => '',
                        'post_parent' => '',
                        'post_date' => '',
                        'post_thumbnail' => '',
                        'post_terms' => '',
                        'acf_fields' => array(
                            'field_669f710f0edcc',
                            'field_669f70690edc9',
                            'field_669f70f00edcb',
                            'field_669f70a10edca',
                            'field_66aa5decb7c4c',
                            'field_66b87286c6172',
                        ),
                    ),
                ),
            ),
            'render' => '',
        ));

        acfe_register_form(array(
            'name' => 'config-tools',
            'title' => 'Lernwerkzeuge konfigurieren',
            'active' => true,
            'field_groups' => array(
                'group_66f691a3bb4f1',
            ),
            'settings' => array(
                'location' => false,
                'honeypot' => true,
                'kses' => true,
                'uploader' => 'default',
            ),
            'attributes' => array(
                'form' => array(
                    'element' => 'form',
                    'class' => '',
                    'id' => '',
                ),
                'fields' => array(
                    'element' => 'div',
                    'wrapper_class' => '',
                    'class' => '',
                    'label' => 'top',
                    'instruction' => 'label',
                ),
                'submit' => array(
                    'value' => 'Konfiguration speichern',
                    'button' => '<input type="submit" class="acf-button button button-primary button-large" value="%s" />',
                    'spinner' => '<span class="acf-spinner"></span>',
                ),
            ),
            'validation' => array(
                'hide_error' => false,
                'hide_revalidation' => false,
                'hide_unload' => false,
                'errors_position' => 'above',
                'errors_class' => '',
                'messages' => array(
                    'failure' => 'Die Überprüfung ist fehlgeschlagen',
                    'success' => 'Die Überprüfung war erfolgreich',
                    'error' => '1 Feld erfordert Aufmerksamkeit',
                    'errors' => '%d Felder erfordern Aufmerksamkeit',
                ),
            ),
            'success' => array(
                'hide_form' => false,
                'scroll' => false,
                'message' => 'Die Konfiguration der Werkzeuge wurde erfolgreich gespeichert.',
                'wrapper' => '<div id="message" class="updated">%s</div>',
            ),
            'actions' => array(
                array(
                    'action' => 'post',
                    'name' => 'group_tool_update',
                    'type' => 'update_post',
                    'save' => array(
                        'target' => '{post}',
                        'post_type' => '',
                        'post_status' => '',
                        'post_title' => '',
                        'post_name' => '',
                        'post_content' => '',
                        'post_excerpt' => '',
                        'post_author' => '',
                        'post_parent' => '',
                        'post_date' => '',
                        'post_thumbnail' => '',
                        'post_terms' => '',
                        'append_terms' => '',
                        'acf_fields' => array(
                            'field_66f691a19a897',
                            'field_66f693d9c37ba',
                            'field_66f69362c37b9',
                            'field_66f6972122938',
                            'field_66f69429d32ee',
                            'field_66fbe9e287457',
                            'field_66f69526d32f0',
                            'field_66fba7e1fe482',
                            'field_66f6959a89236',
                        ),
                    ),
                    'load' => array(
                        'source' => '{post}',
                        'post_type' => '',
                        'post_status' => '',
                        'post_title' => '',
                        'post_name' => '',
                        'post_content' => '',
                        'post_excerpt' => '',
                        'post_author' => '',
                        'post_parent' => '',
                        'post_date' => '',
                        'post_thumbnail' => '',
                        'post_terms' => '',
                        'acf_fields' => array(
                            'field_66f691a19a897',
                            'field_66f693d9c37ba',
                            'field_66f69362c37b9',
                            'field_66f6972122938',
                            'field_66f69429d32ee',
                            'field_66fbe9e287457',
                            'field_66f69526d32f0',
                            'field_66fba7e1fe482',
                            'field_66f6959a89236',
                        ),
                    ),
                ),
            ),
            'render' => '',
        ));

        acfe_register_form(array(
            'name' => 'community-events',
            'title' => 'Neuer Termin',
            'active' => true,
            'field_groups' => array(
                'group_66fcd9ab827ea',
            ),
            'settings' => array(
                'location' => false,
                'honeypot' => true,
                'kses' => true,
                'uploader' => 'default',
            ),
            'attributes' => array(
                'form' => array(
                    'element' => 'form',
                    'class' => '',
                    'id' => '',
                ),
                'fields' => array(
                    'element' => 'div',
                    'wrapper_class' => '',
                    'class' => '',
                    'label' => 'top',
                    'instruction' => 'label',
                ),
                'submit' => array(
                    'value' => 'Submit',
                    'button' => '<input type="submit" class="acf-button button button-primary button-large" value="%s" />',
                    'spinner' => '<span class="acf-spinner"></span>',
                ),
            ),
            'validation' => array(
                'hide_error' => false,
                'hide_revalidation' => false,
                'hide_unload' => false,
                'errors_position' => 'above',
                'errors_class' => '',
                'messages' => array(
                    'failure' => 'Die Überprüfung ist fehlgeschlagen',
                    'success' => 'Die Überprüfung war erfolgreich',
                    'error' => '1 Feld erfordert Aufmerksamkeit',
                    'errors' => '%d Felder erfordern Aufmerksamkeit',
                ),
            ),
            'success' => array(
                'hide_form' => false,
                'scroll' => false,
                'message' => 'Form updated',
                'wrapper' => '<div id="message" class="updated">%s</div>',
            ),
            'actions' => array(
                array(
                    'action' => 'post',
                    'name' => '',
                    'type' => 'insert_post',
                    'save' => array(
                        'post_type' => 'event_post',
                        'post_status' => 'publish',
                        'post_title' => '{field:field_66fcd9aa396d1}',
                        'post_name' => '',
                        'post_content' => '',
                        'post_excerpt' => '{field:field_66fcfa17516be}',
                        'post_author' => '',
                        'post_parent' => '',
                        'post_date' => '',
                        'post_thumbnail' => '',
                        'post_terms' => '',
                        'append_terms' => '',
                        'acf_fields' => array(
                            'field_66fcd9aa396d1',
                            'field_66fcf8e5516ba',
                            'field_66fcf960516bb',
                            'field_66fcf993516bc',
                            'field_66fcf9de516bd',
                            'field_66fcfa17516be',
                        ),
                    ),
                ),
            ),
            'render' => '',
        ));

        acfe_register_form(array(
            'name' => 'edit_pinwall_post',
            'title' => 'Pinnwand Beitrag bearbeiten',
            'active' => true,
            'field_groups' => array(
                'group_62cef43f88be3',
            ),
            'settings' => array(
                'location' => false,
                'honeypot' => true,
                'kses' => true,
                'uploader' => 'default',
            ),
            'attributes' => array(
                'form' => array(
                    'element' => 'form',
                    'class' => '',
                    'id' => '',
                ),
                'fields' => array(
                    'element' => 'div',
                    'wrapper_class' => '',
                    'class' => '',
                    'label' => 'top',
                    'instruction' => 'label',
                ),
                'submit' => array(
                    'value' => 'Submit',
                    'button' => '<input type="submit" class="acf-button button button-primary button-large" value="%s" />',
                    'spinner' => '<span class="acf-spinner"></span>',
                ),
            ),
            'validation' => array(
                'hide_error' => false,
                'hide_revalidation' => false,
                'hide_unload' => false,
                'errors_position' => 'above',
                'errors_class' => '',
                'messages' => array(
                    'failure' => 'Die Überprüfung ist fehlgeschlagen',
                    'success' => 'Die Überprüfung war erfolgreich',
                    'error' => '1 Feld erfordert Aufmerksamkeit',
                    'errors' => '%d Felder erfordern Aufmerksamkeit',
                ),
            ),
            'success' => array(
                'hide_form' => false,
                'scroll' => false,
                'message' => 'Form updated',
                'wrapper' => '<div id="message" class="updated">%s</div>',
            ),
            'actions' => array(
                array(
                    'action' => 'post',
                    'name' => '',
                    'type' => 'update_post',
                    'save' => array(
                        'target' => '{post}',
                        'post_type' => 'pinwall_post',
                        'post_status' => '{field:field_62cef58476ad5}',
                        'post_title' => '{field:field_62cef4d976ad2}',
                        'post_name' => '',
                        'post_content' => '{field:field_62cef52b76ad3}',
                        'post_excerpt' => '',
                        'post_author' => '{post:post_author}',
                        'post_parent' => '',
                        'post_date' => '',
                        'post_thumbnail' => '',
                        'post_terms' => '',
                        'append_terms' => '',
                        'acf_fields' => array(
                            'field_62cef4d976ad2',
                            'field_62cef52b76ad3',
                            'field_62cef54376ad4',
                            'field_62cef58476ad5',
                            'field_62cef5eb76ad6',
                            'field_62cef61f76ad7',
                        ),
                    ),
                    'load' => array(
                        'source' => '{post}',
                        'post_type' => '',
                        'post_status' => '',
                        'post_title' => 'field_62cef4d976ad2',
                        'post_name' => '',
                        'post_content' => 'field_62cef52b76ad3',
                        'post_excerpt' => '',
                        'post_author' => '',
                        'post_parent' => '',
                        'post_date' => '',
                        'post_thumbnail' => '',
                        'post_terms' => '',
                        'acf_fields' => array(
                            'field_62cef54376ad4',
                            'field_62cef58476ad5',
                            'field_62cef5eb76ad6',
                            'field_62cef61f76ad7',
                        ),
                    ),
                ),
            ),
            'render' => '',
        ));

        acfe_register_form(array(
            'name' => 'create-pinwall-post',
            'title' => 'Pinwand Beitrag erstellen',
            'active' => true,
            'field_groups' => array(
                'group_62cef43f88be3',
            ),
            'settings' => array(
                'location' => false,
                'honeypot' => true,
                'kses' => true,
                'uploader' => 'default',
            ),
            'attributes' => array(
                'form' => array(
                    'element' => 'form',
                    'class' => '',
                    'id' => '',
                ),
                'fields' => array(
                    'element' => 'div',
                    'wrapper_class' => '',
                    'class' => '',
                    'label' => 'top',
                    'instruction' => 'label',
                ),
                'submit' => array(
                    'value' => 'Anpinnen',
                    'button' => '<input type="submit" class="acf-button button button-primary button-large" value="%s" />',
                    'spinner' => '<span class="acf-spinner"></span>',
                ),
            ),
            'validation' => array(
                'hide_error' => false,
                'hide_revalidation' => false,
                'hide_unload' => false,
                'errors_position' => 'above',
                'errors_class' => '',
                'messages' => array(
                    'failure' => 'Die Überprüfung ist fehlgeschlagen',
                    'success' => 'Die Überprüfung war erfolgreich',
                    'error' => '1 Feld erfordert Aufmerksamkeit',
                    'errors' => '%d Felder erfordern Aufmerksamkeit',
                ),
            ),
            'success' => array(
                'hide_form' => false,
                'scroll' => false,
                'message' => 'Form updated',
                'wrapper' => '<div id="message" class="updated">%s</div>',
            ),
            'actions' => array(
                array(
                    'action' => 'post',
                    'name' => 'create-pinwall-post',
                    'type' => 'insert_post',
                    'save' => array(
                        'post_type' => 'pinwall_post',
                        'post_status' => '{field:field_62cef58476ad5}',
                        'post_title' => '{field:field_62cef4d976ad2}',
                        'post_name' => '',
                        'post_content' => '{field:field_62cef52b76ad3}',
                        'post_excerpt' => '',
                        'post_author' => '',
                        'post_parent' => '',
                        'post_date' => '',
                        'post_thumbnail' => '',
                        'post_terms' => '',
                        'append_terms' => '',
                        'acf_fields' => array(
                            'field_62cef4d976ad2',
                            'field_62cef52b76ad3',
                            'field_62cef54376ad4',
                            'field_62cef58476ad5',
                            'field_62cef5eb76ad6',
                            'field_62cef61f76ad7',
                        ),
                    ),
                ),
                array(
                    'action' => 'redirect',
                    'name' => 'redirect-pinwall',
                    'url' => '/pinwall_post',
                ),
            ),
            'render' => '',
        ));

        acfe_register_form(array(
            'name' => 'user-profile',
            'title' => 'Profile',
            'active' => true,
            'field_groups' => array(
                'group_62d96bd107db0',
            ),
            'settings' => array(
                'location' => false,
                'honeypot' => true,
                'kses' => true,
                'uploader' => 'default',
            ),
            'attributes' => array(
                'form' => array(
                    'element' => 'form',
                    'class' => '',
                    'id' => '',
                ),
                'fields' => array(
                    'element' => 'div',
                    'wrapper_class' => '',
                    'class' => '',
                    'label' => 'top',
                    'instruction' => 'label',
                ),
                'submit' => array(
                    'value' => 'Submit',
                    'button' => '<input type="submit" class="acf-button button button-primary button-large" value="%s" />',
                    'spinner' => '<span class="acf-spinner"></span>',
                ),
            ),
            'validation' => array(
                'hide_error' => false,
                'hide_revalidation' => false,
                'hide_unload' => false,
                'errors_position' => 'above',
                'errors_class' => '',
                'messages' => array(
                    'failure' => 'Die Überprüfung ist fehlgeschlagen',
                    'success' => 'Die Überprüfung war erfolgreich',
                    'error' => '1 Feld erfordert Aufmerksamkeit',
                    'errors' => '%d Felder erfordern Aufmerksamkeit',
                ),
            ),
            'success' => array(
                'hide_form' => false,
                'scroll' => false,
                'message' => 'Dein Profil wurde Aktualisiert',
                'wrapper' => '<div id="message" class="updated">%s</div>',
            ),
            'actions' => array(
                array(
                    'action' => 'user',
                    'name' => '',
                    'type' => 'update_user',
                    'validation' => true,
                    'save' => array(
                        'target' => '{user}',
                        'user_email' => '{field:field_633e7d10f991e}',
                        'user_login' => '',
                        'user_pass' => '',
                        'first_name' => '{field:field_62d96bf65a78f}',
                        'last_name' => '{field:field_62d96c3f5a790}',
                        'nickname' => '{field:field_62d96c4b5a791}',
                        'display_name' => '{field:field_62d96c4b5a791}',
                        'user_url' => '',
                        'description' => '{field:field_62d96cb05a793}',
                        'role' => '',
                        'log_user' => false,
                        'acf_fields' => array(
                            'field_62d96c745a792',
                        ),
                    ),
                    'load' => array(
                        'source' => '{user}',
                        'user_email' => 'field_633e7d10f991e',
                        'user_login' => '',
                        'user_pass' => '',
                        'first_name' => 'field_62d96bf65a78f',
                        'last_name' => 'field_62d96c3f5a790',
                        'nickname' => 'field_62d96c4b5a791',
                        'display_name' => 'field_62d96c4b5a791',
                        'user_url' => '',
                        'description' => 'field_62d96cb05a793',
                        'role' => '',
                        'acf_fields' => array(
                            'field_62d96c3f5a790',
                            'field_62d96c745a792',
                        ),
                    ),
                ),
            ),
            'render' => '',
        ));


    }

}

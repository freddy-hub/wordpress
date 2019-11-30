import $ from 'jquery';

function handleModalForm() {
    var modalFormWrapper = $('.contact-form-modal__wrapper');
    var modalFormInner = $('.contact-form-modal__inner');
    var modalFormClose = modalFormWrapper.find('.contact-form-modal__close-button');
    var modalFormOpenButtons = $('.contact-form-modal-open-button');

    function openContactFormModal(subject, message, target, rows) {
        modalFormInner
            .find('input[name="your-subject"]')
            .val(subject);
        modalFormInner
            .find('textarea[name="your-message"]')
            .attr('rows', rows)
            .val(message);
        modalFormInner
            .find('input[name="your-target"]')
            .val(target);

        // clear form success class if already present
        modalFormInner.removeClass('contact-form-modal__inner--success contact-form-modal__inner--slideup');

        // show modal
        modalFormWrapper.addClass('contact-form-modal__wrapper--open');
    };

    // add event listeners to all modal opening buttons on the page
    modalFormOpenButtons.on('click', function contactFormButtonHandler(e) {
        e.preventDefault();
        var button = $(this);

        var subject = button.attr('data-subject');
        var message = button.attr('data-message');
        if (message && message.length > 0)
            message = message.replace(/\\n/g, '\n');
        var target = button.attr('data-mail-target');
        var rows = button.attr('data-textarea-rows');

        return openContactFormModal(subject || '', message || '', target || '', rows || 3);
    });

    // close modal on close button click
    modalFormClose.on('click', function() {
        modalFormWrapper.removeClass('contact-form-modal__wrapper--open');
    });

    // prevent clicks on the inner modal from bubbling to wrapper and closing modal
    modalFormInner.on('click', function(e) {
        e.stopPropagation();
    });

    // close modal on wrapper click
    modalFormWrapper.on('click', function() {
        modalFormWrapper.removeClass('contact-form-modal__wrapper--open');
    });

    // on email send success, add success class
    modalFormWrapper.on('wpcf7mailsent', function() {
        modalFormInner.addClass('contact-form-modal__inner--success');
    });

    //handle success messages on forms that are not part of the main modal (but share the same success popup with the modal-success-message css class)

    var successMessageModalWrapper = $('.modal-success-message__wrapper');
    var successMessageModalInner = $('.modal-success-message__inner');
    var formContainer = $('.contact-form-affiliate');

    if (successMessageModalWrapper.length && formContainer.length) {
        formContainer.on('wpcf7mailsent', function() {
            successMessageModalWrapper.addClass('modal-success-message__wrapper--open');
            successMessageModalInner.addClass('modal-success-message__inner--success');
        });

        successMessageModalWrapper.on('click', function() {
            successMessageModalWrapper.removeClass('modal-success-message__wrapper--open');
        });
    }
}

$(document).ready(handleModalForm);

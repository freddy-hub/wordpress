function trackEvent(data, cb) {
    // Disable for now. We'll mainly use mixpanel.
    return cb();

    var body = Object.assign({
        referrer: document.referer,
        href: window.location.href,
    }, data);

    $.ajax({
            type: 'POST',
            url: '/track',
            data: JSON.stringify(body),
            contentType: 'application/json',
        })
        .done(console.log)
        .fail(console.error)
        .always(cb);
}

$(document).ready(function() {
    $('.zenkit-navbar .menu-item.sign-up .nav-link').on('click', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        mixpanel.track('Click marketing header sign-up link', {
            'URL': window.location.href,
            'Path': window.location.pathname,
            'Host': window.location.host,
        });

        mixpanel.track('Click Register Link', {
            'URL': window.location.href,
            'Path': window.location.pathname,
            'Host': window.location.host,
        });

        trackEvent({ event: 'click.marketing.header.sign-up' }, function() {
            window.location.assign(href);
        });
    });

    $('.section__welcome__register-form__sub-header a').on('click', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        mixpanel.track('Click marketing front-page sign-up link', {
            'URL': window.location.href,
            'Path': window.location.pathname,
            'Host': window.location.host,
        });

        mixpanel.track('Click Register Link', {
            'URL': window.location.href,
            'Path': window.location.pathname,
            'Host': window.location.host,
        });

        trackEvent({ event: 'click.marketing.front-page.sign-up.link' }, function() {
            window.location.assign(href);
        });
    });

    $('.section__welcome__store-button').on('click', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        var service = $(this).attr('data-service');
        mixpanel.track('Click marketing front page ' + (service ? service.toLowerCase() + ' ' : '') + 'app store button', {
            'Service': service,
            'URL': window.location.href,
            'Path': window.location.pathname,
            'Host': window.location.host,
        });

        trackEvent({ event: 'click.marketing.front-page.store-button' + (service ? '.' + service.toLowerCase() : '') }, function() {
            window.location.assign(href);
        });
    });

    $('#button-sign-up-power-of-now').on('click', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        mixpanel.track('Click marketing front page import-my-data button', {
            'URL': window.location.href,
            'Path': window.location.pathname,
            'Host': window.location.host,
        });

        mixpanel.track('Click Register Link', {
            'URL': window.location.href,
            'Path': window.location.pathname,
            'Host': window.location.host,
        });

        trackEvent({ event: 'click.marketing.front-page.sign-up.import' }, function() {
            window.location.assign(href);
        });
    });
});

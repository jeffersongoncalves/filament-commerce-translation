<?php

use JeffersonGoncalves\Commerce\Translation\Models\Translation;
use JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\Pages\CreateTranslation;
use JeffersonGoncalves\FilamentCommerce\Translation\Resources\Translation\Pages\ListTranslation;
use Livewire\Livewire;

it('renders the translation list page', function () {
    Translation::factory()->count(2)->create();

    Livewire::test(ListTranslation::class)->assertOk();
});

it('creates a translation record through the panel', function () {
    Livewire::test(CreateTranslation::class)
        ->fillForm([
            'translatable_type' => 'product',
            'translatable_id' => 'prod_1',
            'locale' => 'en',
            'field' => 'title',
            'value' => 'Camiseta',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Translation::query()->count())->toBe(1);
});

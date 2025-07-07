<?php

namespace App\Filament\Traits;

use Illuminate\Support\Facades\Auth;
use App\Models\Menu;

trait HasDynamicNavigation
{
    public static function shouldRegisterNavigation(): bool
    {
        return self::checkMenuAccess(static::class);
    }

    public static function getNavigationLabel(): string
    {
        return self::getMenuValue('label') ?? static::$navigationLabel ?? class_basename(static::class);
    }

    public static function getNavigationGroup(): ?string
    {
        return self::getMenuValue('group') ?? static::$navigationGroup ?? null;
    }

    public static function getPluralModelLabel(): string
    {
        return self::getMenuValue('plural_label') ?? static::$pluralModelLabel ?? class_basename(static::class);
    }

    public static function getNavigationIcon(): ?string
    {
        return self::getMenuValue('icon') ?? static::$navigationIcon ?? 'heroicon-o-rectangle-stack';
    }

    /**
     * Cek apakah resource ini boleh tampil di sidebar berdasarkan data menu.
     */
    protected static function checkMenuAccess(string $resourceClass): bool
    {
        $user = Auth::user();
        if (! $user) {
            return false;
        }

        $label = static::$navigationLabel ?? class_basename($resourceClass);

        $menu = Menu::where('label', $label)
            ->where('is_active', true)
            ->first();

        return $menu && in_array($user->role, $menu->roles ?? []);
    }

    /**
     * Ambil nilai properti dari data menu jika tersedia.
     */
    protected static function getMenuValue(string $field): mixed
    {
        $label = static::$navigationLabel ?? class_basename(static::class);

        $menu = Menu::where('label', $label)->first();

        return $menu?->{$field};
    }
}

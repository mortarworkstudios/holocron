<?php

declare(strict_types=1);

/**
 * Copyright (c) 2022 Kai Sassnowski
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * @see https://github.com/ksassnowski/utgars-chronicles.app
 */

namespace Tests\Unit\Request;

use App\Http\Requests\Legacy\UpdateLegacyRequest;
use Illuminate\Foundation\Http\FormRequest;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
final class UpdateLegacyRequestTest extends TestCase
{
    use FormRequestTest;

    protected function getRequest(): FormRequest
    {
        return new UpdateLegacyRequest();
    }

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
        ];
    }
}

<?php

namespace NexaMerchant\Apps\Enums;

use BenSampo\Enum\Enum;

final class Category extends Enum
{
    const CMS = 'cms';
    const CRM = 'crm';
    const ECOMMERCE = 'ecommerce';
    const ERP = 'erp';
    const HRM = 'hrm';
    const LMS = 'lms';
    const POS = 'pos';
    const PROJECT = 'project';
    const SAAS = 'saas';
    const OTHER = 'other';

    public static function getDescription($value): string
    {
        switch ($value) {
            case self::CMS:
                return trans('apps::category.cms');
            case self::CRM:
                return trans('apps::category.crm');
            case self::ECOMMERCE:
                return trans('apps::category.ecommerce');
            case self::ERP:
                return trans('apps::category.erp');
            case self::HRM:
                return trans('apps::category.hrm');
            case self::LMS:
                return trans('apps::category.lms');
            case self::POS:
                return trans('apps::category.pos');
            case self::PROJECT:
                return trans('apps::category.project');
            case self::SAAS:
                return trans('apps::category.saas');
            case self::OTHER:
                return trans('apps::category.other');
            default:
                return parent::getDescription($value);
        }
    }
}
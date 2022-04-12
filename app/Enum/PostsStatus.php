<?php
namespace Enum;

enum PostsStatus: sting{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case SCHEDULED = 'scheduled';
}

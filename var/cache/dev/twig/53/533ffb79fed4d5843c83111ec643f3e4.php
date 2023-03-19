<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* easycorp/easyadmin-bundle/src/Form/Type/FileUploadType.php */
class __TwigTemplate_237300f318082eac1e127101d5a86867 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Type/FileUploadType.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "easycorp/easyadmin-bundle/src/Form/Type/FileUploadType.php"));

        // line 1
        echo "<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type;

use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\DataTransformer\\StringToFileTransformer;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Model\\FileUploadState;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\DataMapperInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\HttpFoundation\\File\\File;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\OptionsResolver\\Exception\\InvalidArgumentException;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\String\\Slugger\\AsciiSlugger;
use Symfony\\Component\\Uid\\Ulid;
use Symfony\\Component\\Uid\\Uuid;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class FileUploadType extends AbstractType implements DataMapperInterface
{
    private string \$projectDir;

    public function __construct(string \$projectDir)
    {
        \$this->projectDir = \$projectDir;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$uploadDir = \$options['upload_dir'];
        \$uploadFilename = \$options['upload_filename'];
        \$uploadValidate = \$options['upload_validate'];
        \$allowAdd = \$options['allow_add'];
        unset(\$options['upload_dir'], \$options['upload_new'], \$options['upload_delete'], \$options['upload_filename'], \$options['upload_validate'], \$options['download_path'], \$options['allow_add'], \$options['allow_delete'], \$options['compound']);

        \$builder->add('file', FileType::class, \$options);
        \$builder->add('delete', CheckboxType::class, ['required' => false]);

        \$builder->setDataMapper(\$this);
        \$builder->setAttribute('state', new FileUploadState(\$allowAdd));
        \$builder->addModelTransformer(new StringToFileTransformer(\$uploadDir, \$uploadFilename, \$uploadValidate, \$options['multiple']));
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        /** @var FileUploadState \$state */
        \$state = \$form->getConfig()->getAttribute('state');

        if ([] === \$currentFiles = \$state->getCurrentFiles()) {
            \$data = \$form->getNormData();

            if (null !== \$data && [] !== \$data) {
                \$currentFiles = \\is_array(\$data) ? \$data : [\$data];

                foreach (\$currentFiles as \$i => \$file) {
                    if (\$file instanceof UploadedFile) {
                        unset(\$currentFiles[\$i]);
                    }
                }
            }
        }

        \$view->vars['currentFiles'] = \$currentFiles;
        \$view->vars['multiple'] = \$options['multiple'];
        \$view->vars['allow_add'] = \$options['allow_add'];
        \$view->vars['allow_delete'] = \$options['allow_delete'];
        \$view->vars['download_path'] = \$options['download_path'];
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$uploadNew = static function (UploadedFile \$file, string \$uploadDir, string \$fileName) {
            \$file->move(\$uploadDir, \$fileName);
        };

        \$uploadDelete = static function (File \$file) {
            unlink(\$file->getPathname());
        };

        \$uploadFilename = static fn (UploadedFile \$file): string => \$file->getClientOriginalName();

        \$uploadValidate = static function (string \$filename): string {
            if (!file_exists(\$filename)) {
                return \$filename;
            }

            \$index = 1;
            \$pathInfo = pathinfo(\$filename);
            while (file_exists(\$filename = sprintf('%s/%s_%d.%s', \$pathInfo['dirname'], \$pathInfo['filename'], \$index, \$pathInfo['extension']))) {
                ++\$index;
            }

            return \$filename;
        };

        \$downloadPath = fn (Options \$options) => mb_substr(\$options['upload_dir'], mb_strlen(\$this->projectDir.'/public/'));

        \$allowAdd = static fn (Options \$options) => \$options['multiple'];

        \$dataClass = static fn (Options \$options) => \$options['multiple'] ? null : File::class;

        \$emptyData = static fn (Options \$options) => \$options['multiple'] ? [] : null;

        \$resolver->setDefaults([
            'upload_dir' => \$this->projectDir.'/public/uploads/files/',
            'upload_new' => \$uploadNew,
            'upload_delete' => \$uploadDelete,
            'upload_filename' => \$uploadFilename,
            'upload_validate' => \$uploadValidate,
            'download_path' => \$downloadPath,
            'allow_add' => \$allowAdd,
            'allow_delete' => true,
            'data_class' => \$dataClass,
            'empty_data' => \$emptyData,
            'multiple' => false,
            'required' => false,
            'error_bubbling' => false,
            'allow_file_upload' => true,
        ]);

        \$resolver->setAllowedTypes('upload_dir', 'string');
        \$resolver->setAllowedTypes('upload_new', 'callable');
        \$resolver->setAllowedTypes('upload_delete', 'callable');
        \$resolver->setAllowedTypes('upload_filename', ['string', 'callable']);
        \$resolver->setAllowedTypes('upload_validate', 'callable');
        \$resolver->setAllowedTypes('download_path', ['null', 'string']);
        \$resolver->setAllowedTypes('allow_add', 'bool');
        \$resolver->setAllowedTypes('allow_delete', 'bool');

        \$resolver->setNormalizer('upload_dir', function (Options \$options, string \$value): string {
            if (\\DIRECTORY_SEPARATOR !== mb_substr(\$value, -1)) {
                \$value .= \\DIRECTORY_SEPARATOR;
            }

            \$isStreamWrapper = filter_var(\$value, \\FILTER_VALIDATE_URL);
            if (!\$isStreamWrapper && !str_starts_with(\$value, \$this->projectDir)) {
                \$value = \$this->projectDir.'/'.\$value;
            }

            if ('' !== \$value && (!is_dir(\$value) || !is_writable(\$value))) {
                throw new InvalidArgumentException(sprintf('Invalid upload directory \"%s\" it does not exist or is not writable.', \$value));
            }

            return \$value;
        });
        \$resolver->setNormalizer('upload_filename', static function (Options \$options, \$fileNamePatternOrCallable) {
            if (\\is_callable(\$fileNamePatternOrCallable)) {
                return \$fileNamePatternOrCallable;
            }

            return static function (UploadedFile \$file) use (\$fileNamePatternOrCallable) {
                return strtr(\$fileNamePatternOrCallable, [
                    '[contenthash]' => sha1_file(\$file->getRealPath()),
                    '[day]' => date('d'),
                    '[extension]' => \$file->guessClientExtension(),
                    '[month]' => date('m'),
                    '[name]' => pathinfo(\$file->getClientOriginalName(), \\PATHINFO_FILENAME),
                    '[randomhash]' => bin2hex(random_bytes(20)),
                    '[slug]' => (new AsciiSlugger())
                        ->slug(pathinfo(\$file->getClientOriginalName(), \\PATHINFO_FILENAME))
                        ->lower()
                        ->toString(),
                    '[timestamp]' => time(),
                    '[uuid]' => Uuid::v4()->toRfc4122(),
                    '[ulid]' => new Ulid(),
                    '[year]' => date('Y'),
                ]);
            };
        });
        \$resolver->setNormalizer('allow_add', static function (Options \$options, string \$value): bool {
            if ((bool) \$value && !\$options['multiple']) {
                throw new InvalidArgumentException('Setting \"allow_add\" option to \"true\" when \"multiple\" option is \"false\" is not supported.');
            }

            return (bool) \$value;
        });
    }

    public function getBlockPrefix(): string
    {
        return 'ea_fileupload';
    }

    public function mapDataToForms(\$currentFiles, \$forms): void
    {
        /** @var FormInterface \$fileForm */
        \$fileForm = current(iterator_to_array(\$forms));
        \$fileForm->setData(\$currentFiles);
    }

    public function mapFormsToData(\$forms, &\$currentFiles): void
    {
        /** @var FormInterface[] \$children */
        \$children = iterator_to_array(\$forms);
        \$uploadedFiles = \$children['file']->getData();

        /** @var FileUploadState \$state */
        \$state = \$children['file']->getParent()->getConfig()->getAttribute('state');
        \$state->setCurrentFiles(\$currentFiles);
        \$state->setUploadedFiles(\$uploadedFiles);
        \$state->setDelete(\$children['delete']->getData());

        if (!\$state->isModified()) {
            return;
        }

        if (\$state->isAddAllowed() && !\$state->isDelete()) {
            \$currentFiles = array_merge(\$currentFiles, \$uploadedFiles);
        } else {
            \$currentFiles = \$uploadedFiles;
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "easycorp/easyadmin-bundle/src/Form/Type/FileUploadType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type;

use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\DataTransformer\\StringToFileTransformer;
use EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\Model\\FileUploadState;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\DataMapperInterface;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\HttpFoundation\\File\\File;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\OptionsResolver\\Exception\\InvalidArgumentException;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\String\\Slugger\\AsciiSlugger;
use Symfony\\Component\\Uid\\Ulid;
use Symfony\\Component\\Uid\\Uuid;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class FileUploadType extends AbstractType implements DataMapperInterface
{
    private string \$projectDir;

    public function __construct(string \$projectDir)
    {
        \$this->projectDir = \$projectDir;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$uploadDir = \$options['upload_dir'];
        \$uploadFilename = \$options['upload_filename'];
        \$uploadValidate = \$options['upload_validate'];
        \$allowAdd = \$options['allow_add'];
        unset(\$options['upload_dir'], \$options['upload_new'], \$options['upload_delete'], \$options['upload_filename'], \$options['upload_validate'], \$options['download_path'], \$options['allow_add'], \$options['allow_delete'], \$options['compound']);

        \$builder->add('file', FileType::class, \$options);
        \$builder->add('delete', CheckboxType::class, ['required' => false]);

        \$builder->setDataMapper(\$this);
        \$builder->setAttribute('state', new FileUploadState(\$allowAdd));
        \$builder->addModelTransformer(new StringToFileTransformer(\$uploadDir, \$uploadFilename, \$uploadValidate, \$options['multiple']));
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        /** @var FileUploadState \$state */
        \$state = \$form->getConfig()->getAttribute('state');

        if ([] === \$currentFiles = \$state->getCurrentFiles()) {
            \$data = \$form->getNormData();

            if (null !== \$data && [] !== \$data) {
                \$currentFiles = \\is_array(\$data) ? \$data : [\$data];

                foreach (\$currentFiles as \$i => \$file) {
                    if (\$file instanceof UploadedFile) {
                        unset(\$currentFiles[\$i]);
                    }
                }
            }
        }

        \$view->vars['currentFiles'] = \$currentFiles;
        \$view->vars['multiple'] = \$options['multiple'];
        \$view->vars['allow_add'] = \$options['allow_add'];
        \$view->vars['allow_delete'] = \$options['allow_delete'];
        \$view->vars['download_path'] = \$options['download_path'];
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$uploadNew = static function (UploadedFile \$file, string \$uploadDir, string \$fileName) {
            \$file->move(\$uploadDir, \$fileName);
        };

        \$uploadDelete = static function (File \$file) {
            unlink(\$file->getPathname());
        };

        \$uploadFilename = static fn (UploadedFile \$file): string => \$file->getClientOriginalName();

        \$uploadValidate = static function (string \$filename): string {
            if (!file_exists(\$filename)) {
                return \$filename;
            }

            \$index = 1;
            \$pathInfo = pathinfo(\$filename);
            while (file_exists(\$filename = sprintf('%s/%s_%d.%s', \$pathInfo['dirname'], \$pathInfo['filename'], \$index, \$pathInfo['extension']))) {
                ++\$index;
            }

            return \$filename;
        };

        \$downloadPath = fn (Options \$options) => mb_substr(\$options['upload_dir'], mb_strlen(\$this->projectDir.'/public/'));

        \$allowAdd = static fn (Options \$options) => \$options['multiple'];

        \$dataClass = static fn (Options \$options) => \$options['multiple'] ? null : File::class;

        \$emptyData = static fn (Options \$options) => \$options['multiple'] ? [] : null;

        \$resolver->setDefaults([
            'upload_dir' => \$this->projectDir.'/public/uploads/files/',
            'upload_new' => \$uploadNew,
            'upload_delete' => \$uploadDelete,
            'upload_filename' => \$uploadFilename,
            'upload_validate' => \$uploadValidate,
            'download_path' => \$downloadPath,
            'allow_add' => \$allowAdd,
            'allow_delete' => true,
            'data_class' => \$dataClass,
            'empty_data' => \$emptyData,
            'multiple' => false,
            'required' => false,
            'error_bubbling' => false,
            'allow_file_upload' => true,
        ]);

        \$resolver->setAllowedTypes('upload_dir', 'string');
        \$resolver->setAllowedTypes('upload_new', 'callable');
        \$resolver->setAllowedTypes('upload_delete', 'callable');
        \$resolver->setAllowedTypes('upload_filename', ['string', 'callable']);
        \$resolver->setAllowedTypes('upload_validate', 'callable');
        \$resolver->setAllowedTypes('download_path', ['null', 'string']);
        \$resolver->setAllowedTypes('allow_add', 'bool');
        \$resolver->setAllowedTypes('allow_delete', 'bool');

        \$resolver->setNormalizer('upload_dir', function (Options \$options, string \$value): string {
            if (\\DIRECTORY_SEPARATOR !== mb_substr(\$value, -1)) {
                \$value .= \\DIRECTORY_SEPARATOR;
            }

            \$isStreamWrapper = filter_var(\$value, \\FILTER_VALIDATE_URL);
            if (!\$isStreamWrapper && !str_starts_with(\$value, \$this->projectDir)) {
                \$value = \$this->projectDir.'/'.\$value;
            }

            if ('' !== \$value && (!is_dir(\$value) || !is_writable(\$value))) {
                throw new InvalidArgumentException(sprintf('Invalid upload directory \"%s\" it does not exist or is not writable.', \$value));
            }

            return \$value;
        });
        \$resolver->setNormalizer('upload_filename', static function (Options \$options, \$fileNamePatternOrCallable) {
            if (\\is_callable(\$fileNamePatternOrCallable)) {
                return \$fileNamePatternOrCallable;
            }

            return static function (UploadedFile \$file) use (\$fileNamePatternOrCallable) {
                return strtr(\$fileNamePatternOrCallable, [
                    '[contenthash]' => sha1_file(\$file->getRealPath()),
                    '[day]' => date('d'),
                    '[extension]' => \$file->guessClientExtension(),
                    '[month]' => date('m'),
                    '[name]' => pathinfo(\$file->getClientOriginalName(), \\PATHINFO_FILENAME),
                    '[randomhash]' => bin2hex(random_bytes(20)),
                    '[slug]' => (new AsciiSlugger())
                        ->slug(pathinfo(\$file->getClientOriginalName(), \\PATHINFO_FILENAME))
                        ->lower()
                        ->toString(),
                    '[timestamp]' => time(),
                    '[uuid]' => Uuid::v4()->toRfc4122(),
                    '[ulid]' => new Ulid(),
                    '[year]' => date('Y'),
                ]);
            };
        });
        \$resolver->setNormalizer('allow_add', static function (Options \$options, string \$value): bool {
            if ((bool) \$value && !\$options['multiple']) {
                throw new InvalidArgumentException('Setting \"allow_add\" option to \"true\" when \"multiple\" option is \"false\" is not supported.');
            }

            return (bool) \$value;
        });
    }

    public function getBlockPrefix(): string
    {
        return 'ea_fileupload';
    }

    public function mapDataToForms(\$currentFiles, \$forms): void
    {
        /** @var FormInterface \$fileForm */
        \$fileForm = current(iterator_to_array(\$forms));
        \$fileForm->setData(\$currentFiles);
    }

    public function mapFormsToData(\$forms, &\$currentFiles): void
    {
        /** @var FormInterface[] \$children */
        \$children = iterator_to_array(\$forms);
        \$uploadedFiles = \$children['file']->getData();

        /** @var FileUploadState \$state */
        \$state = \$children['file']->getParent()->getConfig()->getAttribute('state');
        \$state->setCurrentFiles(\$currentFiles);
        \$state->setUploadedFiles(\$uploadedFiles);
        \$state->setDelete(\$children['delete']->getData());

        if (!\$state->isModified()) {
            return;
        }

        if (\$state->isAddAllowed() && !\$state->isDelete()) {
            \$currentFiles = array_merge(\$currentFiles, \$uploadedFiles);
        } else {
            \$currentFiles = \$uploadedFiles;
        }
    }
}
", "easycorp/easyadmin-bundle/src/Form/Type/FileUploadType.php", "C:\\xampp\\apps\\symfony\\templates\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\FileUploadType.php");
    }
}

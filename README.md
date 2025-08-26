# robots-dreams/footstep
## PHP classes to render bootstrap elements

<img src="logo.png" class="rounded mx-auto d-block img-thumbnail" alt="logo" style="width: 300px; height: 300px;">

The package is still a work in progress and will be extended in the future.

At the moment only buttons are supported.

### Example Usage:
```
<?php echo new Button(TypeEnum::SUCCESS, 'Speichern') ?>
```
renders to:
![image info](./assets/1.png)

---

```
<?php echo new Button(TypeEnum::WARNING, 'Speichern', outline: OutlineType::OUTLINE) ?>
```
renders to:
![image info](./assets/2.png)

---

```
<?php echo new Button(TypeEnum::DARK, 'Speichern', ButtonSizeEnum::SM, OutlineType::OUTLINE) ?>
```
renders to:
![image info](./assets/3.png)

---

```
<?php echo new Button(TypeEnum::DANGER, 'Speichern', ButtonSizeEnum::LG, OutlineType::OUTLINE) ?>
```
renders to:
![image info](./assets/4.png)

---

```
<?php echo new Button(TypeEnum::INFO, 'Speichern', disabled: true) ?>
```
renders to:
![image info](./assets/5.png)
